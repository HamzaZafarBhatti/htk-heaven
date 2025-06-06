<?php

namespace App\Filament\Resources;

use App\Enums\AccidentManagementStatusEnum;
use App\Enums\ClaimTypesEnum;
use App\Enums\FileStatusEnum;
use App\Enums\VehicleConditionEnum;
use App\Filament\Resources\AccidentManagementFormResource\Pages;
use App\Filament\Resources\AccidentManagementFormResource\RelationManagers;
use App\Models\AccidentManagementForm;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

class AccidentManagementFormResource extends Resource
{
    protected static ?string $model = AccidentManagementForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Accident Management';

    protected static ?string $slug = 'accident-management';

    public static function getBreadcrumb(): string
    {
        return 'Accident Management Forms';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('road_traffic_accident_id')
                    ->label('RTA reference')
                    ->relationship(name: 'road_traffic_accident', titleAttribute: 'rta_number', modifyQueryUsing: function (Builder $query) {
                        $isCreatePage = Route::currentRouteName() === static::getRouteBaseName() . '.create';
                        if ($isCreatePage) {
                            return $query->whereDoesntHave('accident_management_form');
                        }
                    })
                    ->default(fn() => request()->get('road_traffic_accident_id'))
                    ->required()
                    ->getOptionLabelFromRecordUsing(fn(Model $record) => $record->rta_number),
                Grid::make(3)
                    ->schema([
                        DatePicker::make('last_update_date')
                            ->label('Last Updated?'),
                        DatePicker::make('next_update_date')
                            ->label('Next Update?')
                            ->required(),
                        Select::make('claim_type')
                            ->label('Claim Type?')
                            ->options(ClaimTypesEnum::toArray())
                            ->required(),
                        Select::make('file_status')
                            ->options(FileStatusEnum::toArray())
                            ->required(),
                        TextInput::make('current_position'),
                        Select::make('status')
                            ->options(AccidentManagementStatusEnum::toArray())
                            ->required(),
                        TextInput::make('claim_handler'),
                        TextInput::make('tp_claim_reference'),
                        TextInput::make('tp_insurance_company_email'),
                    ]),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('settlement_amount')
                    ->numeric()
                    ->default(0),
                Select::make('vehicle_condition')
                    ->options(VehicleConditionEnum::toArray())
                    ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->directory('accident-management-forms')
                    ->maxFiles(10)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('road_traffic_accident.rta_number')
                    ->label('RTA reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('claim_type')
                    ->formatStateUsing(fn($state) => $state->getLabel())
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_status')
                    ->formatStateUsing(fn($state) => $state->getLabel())
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->formatStateUsing(fn($state) => $state->getLabel())
                    ->searchable(),
                Tables\Columns\TextColumn::make('settlement_amount')
                    ->money('GBP')
                    ->sortable(),
                Tables\Columns\TextColumn::make('vehicle_condition')
                    ->formatStateUsing(fn($state) => $state->getLabel())
                    ->searchable(),
                Tables\Columns\TextColumn::make('next_update_date')
                    ->date()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('pdfDownload')
                        ->label('Download PDF')
                        ->icon('heroicon-o-document-arrow-down')
                        ->visible(fn($record) => is_null($record->deleted_at))
                        ->url(fn($record) => route("accident-management.download.pdf", $record->id)),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\Action::make('actions')
                        ->label('Actions')
                        ->icon('heroicon-o-folder-plus')
                        ->visible(fn($record) => is_null($record->deleted_at))
                        ->modalHeading('Actions')
                        ->form([
                            Repeater::make('actions')
                                ->schema([
                                    Grid::make(3)
                                        ->schema([
                                            DatePicker::make('date')
                                                ->required(),
                                            TextInput::make('note')
                                                ->label('Notes')
                                                ->required()
                                                ->maxLength(500),
                                            Select::make('user_id')
                                                ->label('User')
                                                ->options(User::role(['Superadmin', 'Admin'])->pluck('name', 'id'))
                                                ->required(),
                                        ]),
                                    Toggle::make('is_hidden')
                                        ->label('Private Comment'),
                                ])
                        ])
                        ->fillForm(function ($record) {
                            if ($record->actions) {
                                return [
                                    'actions' => $record->actions,
                                ];
                            }
                        })
                        ->action(function (array $data, $record) {
                            try {
                                $record->update([
                                    'actions' => $data['actions'],
                                ]);
                                Notification::make()
                                    ->title('Actions saved')
                                    ->success()
                                    ->send();
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->title('Something went wrong')
                                    ->danger()
                                    ->send();
                            }
                        })
                        ->modalSubmitActionLabel('Save Actions'),
                    Tables\Actions\Action::make('events')
                        ->label('Events')
                        ->icon('heroicon-o-folder-plus')
                        ->visible(fn($record) => is_null($record->deleted_at))
                        ->modalHeading('Events')
                        ->form([
                            Repeater::make('events')
                                ->schema([
                                    Grid::make(3)
                                        ->schema([
                                            DatePicker::make('date')
                                                ->required(),
                                            TextInput::make('comment')
                                                ->label('Comments')
                                                ->required()
                                                ->maxLength(500),
                                            Select::make('user_id')
                                                ->label('User')
                                                ->options(User::role(['Superadmin', 'Admin'])->pluck('name', 'id'))
                                                ->required(),
                                        ]),
                                    Toggle::make('is_hidden')
                                        ->label('Private Comment'),
                                ])
                        ])
                        ->fillForm(function ($record) {
                            if ($record->events) {
                                return [
                                    'events' => $record->events,
                                ];
                            }
                        })
                        ->action(function (array $data, $record) {
                            try {
                                $record->update([
                                    'events' => $data['events'],
                                ]);
                                Notification::make()
                                    ->title('Events saved')
                                    ->success()
                                    ->send();
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->title('Something went wrong')
                                    ->danger()
                                    ->send();
                            }
                        })
                        ->modalSubmitActionLabel('Save Events'),
                ])
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
            'index' => Pages\ListAccidentManagementForms::route('/'),
            'create' => Pages\CreateAccidentManagementForm::route('/create'),
            'edit' => Pages\EditAccidentManagementForm::route('/{record}/edit'),
            'view' => Pages\ViewAccidentManagementForm::route('/{record}'),
        ];
    }
}
