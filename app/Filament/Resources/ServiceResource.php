<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\Rule;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Name')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', str($state)->slug());
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->label('Slug'),
                        FileUpload::make('header_image')
                            ->label('Header Image')
                            ->helperText(new HtmlString('Recommended size: 1221×310'))
                            ->directory('services')
                            ->image()
                            ->required()
                            ->rules([
                                Rule::dimensions()->maxWidth(1221)->maxHeight(310),
                            ]),
                        RichEditor::make('content')
                            ->required()
                            ->label('Content')
                            ->fileAttachmentsDirectory('services')
                            ->enableToolbarButtons(['h1'])
                            ->columnSpanFull(),
                        Repeater::make('faqs')
                            ->schema([
                                TextInput::make('question')->required(),
                                TextInput::make('answer')->required()
                            ])
                            ->grid(2)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('header_image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('preview')
                    ->url(fn(Service $record): string => route('service.show', ['slug' => $record->slug]))
                    ->color('success')
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-eye')
                    ->label('Preview'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
