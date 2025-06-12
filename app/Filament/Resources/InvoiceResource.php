<?php

namespace App\Filament\Resources;

use App\Enums\InvoiceStatusEnum;
use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Billing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Invoice Information')
                    ->schema([
                        Forms\Components\TextInput::make('invoice_number')
                            ->default('SAS-INV-' . now()->format('Ymd') . '-' . strtoupper(Str::random(4)))
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\Select::make('customer_id')
                            ->relationship('customer', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->live(),
                        Forms\Components\DatePicker::make('invoice_date')
                            ->default(now())
                            ->required(),
                        Forms\Components\DatePicker::make('due_date')
                            ->default(now()->addDays(7))
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options(InvoiceStatusEnum::toArray())
                            ->default('draft')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Invoice Items')
                    ->schema([
                        Forms\Components\Repeater::make('items')
                            ->relationship('items')
                            ->schema([
                                Forms\Components\TextInput::make('description')
                                    ->required()
                                    ->columnSpan(2),
                                Forms\Components\TextInput::make('quantity')
                                    ->numeric()
                                    ->default(1)
                                    ->required(),
                                Forms\Components\TextInput::make('unit_price')
                                    ->numeric()
                                    ->required()
                                    ->prefix('£'),
                                Forms\Components\TextInput::make('tax_rate')
                                    ->numeric()
                                    ->default(0)
                                    ->suffix('%'),
                                Forms\Components\TextInput::make('discount')
                                    ->numeric()
                                    ->default(0)
                                    ->suffix('%'),
                                Forms\Components\TextInput::make('total')
                                    ->numeric()
                                    ->prefix('£')
                                    ->readOnly()
                                    ->dehydrated()
                                    ->afterStateHydrated(function ($component, $state) {
                                        $component->state(number_format($state, 2));
                                    }),
                            ])
                            ->columns(6)
                            ->live()
                            ->afterStateUpdated(function (Forms\Get $get, Forms\Set $set) {
                                self::updateTotals($get, $set);
                            })
                            ->deleteAction(
                                fn(Forms\Components\Actions\Action $action) => $action->after(
                                    fn(Forms\Get $get, Forms\Set $set) =>
                                    self::updateTotals($get, $set)
                                ),
                            )
                            ->reorderable(false),
                    ]),

                Forms\Components\Section::make('Summary')
                    ->schema([
                        Forms\Components\TextInput::make('total_amount')
                            ->numeric()
                            ->prefix('£')
                            ->readOnly()
                            ->afterStateHydrated(function ($component, $state) {
                                $component->state(number_format($state, 2));
                            }),
                        Forms\Components\TextInput::make('tax_amount')
                            ->numeric()
                            ->prefix('£')
                            ->readOnly()
                            ->afterStateHydrated(function ($component, $state) {
                                $component->state(number_format($state, 2));
                            }),
                        Forms\Components\TextInput::make('discount_amount')
                            ->numeric()
                            ->prefix('£')
                            ->default(0)
                            ->readOnly()
                            ->afterStateHydrated(function ($component, $state) {
                                $component->state(number_format($state, 2));
                            }),
                        Forms\Components\TextInput::make('grand_total')
                            ->numeric()
                            ->prefix('£')
                            ->readOnly()
                            ->afterStateHydrated(function ($component, $state) {
                                $component->state(number_format($state, 2));
                            }),
                    ])->columns(2),

                Forms\Components\Section::make('Notes')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                    ]),
            ]);
    }


    protected static function updateTotals(Forms\Get $get, Forms\Set $set): void
    {
        $items = collect($get('items'))->filter(fn($item) => !empty($item['unit_price']));

        $subtotal = $items->sum(function ($item) {
            return ((int) $item['unit_price'] * (int) $item['quantity']);
        });

        $subtotal = number_format($subtotal, 2);

        $totalDiscount = $items->sum(function ($item) {
            return ((int) $item['unit_price'] * (int) $item['quantity'] * (int) $item['discount'] / 100);
        });

        $totalDiscount = number_format($totalDiscount, 2);

        $taxableAmount = $subtotal - $totalDiscount;

        $totalTax = $items->sum(function ($item) use ($taxableAmount) {
            return ((int) $item['unit_price'] * (int) $item['quantity'] - ((int) $item['unit_price'] * (int) $item['quantity'] * (int) $item['discount'] / 100)) * (int) $item['tax_rate'] / 100;
        });

        $totalTax = number_format($totalTax, 2);

        $grandTotal = $taxableAmount + $totalTax;

        $grandTotal = number_format($grandTotal, 2);

        $set('total_amount', $subtotal);
        $set('discount_amount', $totalDiscount);
        $set('tax_amount', $totalTax);
        $set('grand_total', $grandTotal);

        // Update individual item totals
        $items->each(function ($item, $key) use ($set) {
            $itemTotal = (int) $item['unit_price'] * (int) $item['quantity'];
            $itemDiscount = $itemTotal * (int) $item['discount'] / 100;
            $itemTax = ($itemTotal - $itemDiscount) * (int) $item['tax_rate'] / 100;
            $total = $itemTotal - $itemDiscount + $itemTax;
            $total = number_format($total, 2);

            $set("items.{$key}.total", $total);
        });
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invoice_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('invoice_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('due_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('grand_total')
                    ->numeric()
                    ->sortable()
                    ->money('GBP'),
                Tables\Columns\SelectColumn::make('status')
                    ->options(InvoiceStatusEnum::toArray()),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'sent' => 'Sent',
                        'paid' => 'Paid',
                        'overdue' => 'Overdue',
                        'cancelled' => 'Cancelled',
                    ]),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\Action::make('print')
                    ->icon('heroicon-o-printer')
                    ->url(fn(Invoice $record) => route('filament.admin.resources.invoices.print', $record))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
            'print' => Pages\PrintInvoice::route('/{record}/print'),
        ];
    }
}
