<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InsuranceCoverTypeResource\Pages;
use App\Filament\Resources\InsuranceCoverTypeResource\RelationManagers;
use App\Models\InsuranceCoverType;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InsuranceCoverTypeResource extends Resource
{
    protected static ?string $model = InsuranceCoverType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort  = 2;

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('Superadmin');
        // return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Forms\Components\TextInput::make('name')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                ToggleColumn::make('is_active')->label('Active'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListInsuranceCoverTypes::route('/'),
            // 'create' => Pages\CreateInsuranceCoverType::route('/create'),
            // 'edit' => Pages\EditInsuranceCoverType::route('/{record}/edit'),
        ];
    }
}
