<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormResource\Pages;
use App\Filament\Resources\FormResource\RelationManagers;
use App\Models\Form as FormModel;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormResource extends Resource
{
    protected static ?string $model = FormModel::class;

    protected static ?string $navigationGroup = 'Forms';

    protected static ?int $navigationSort  = 1;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

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
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('description'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Layout')
                    ->color('success')
                    ->icon('heroicon-o-document-text')
                    ->url(fn(): string => route('admin.forms.layout-js')),
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
            'index' => Pages\ListForms::route('/'),
            // 'create' => Pages\CreateForm::route('/create'),
            // 'edit' => Pages\EditForm::route('/{record}/edit'),
        ];
    }
}
