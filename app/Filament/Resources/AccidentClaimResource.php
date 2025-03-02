<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccidentClaimResource\Pages;
use App\Filament\Resources\AccidentClaimResource\RelationManagers;
use App\Models\AccidentClaim;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccidentClaimResource extends Resource
{
    protected static ?string $model = AccidentClaim::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('Superadmin');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('full_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('car_registration_number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('accident_date')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Action::make('viewDetails')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->modalHeading('Accident Claim Details')
                    ->modalContent(function (AccidentClaim $record) {
                        return view('filament.modals.accident-claim-details', [
                            'record' => $record,
                        ]);
                    })
                    ->modalSubmitAction(false),
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
            'index' => Pages\ListAccidentClaims::route('/'),
            // 'create' => Pages\CreateAccidentClaim::route('/create'),
            // 'edit' => Pages\EditAccidentClaim::route('/{record}/edit'),
        ];
    }
}
