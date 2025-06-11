<?php

namespace App\Filament\Pages;

use App\Settings\PageMetaSetting;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManagePageMetaSetting extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $title = "Page Meta Settings";

    protected static string $settings = PageMetaSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Home Page Meta')
                    ->schema([
                        Forms\Components\TextInput::make('home_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('home_description')
                            ->label('Description')
                            ->required()
                            ->maxLength(500),
                    ]),
                Fieldset::make('Recovery of Vehicle Page Meta')
                    ->schema([
                        Forms\Components\TextInput::make('recovery_of_vehicle_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('recovery_of_vehicle_description')
                            ->label('Description')
                            ->required()
                            ->maxLength(500),
                    ]),
                Fieldset::make('Comparable Vehicle Page Meta')
                    ->schema([
                        Forms\Components\TextInput::make('comparable_vehicle_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('comparable_vehicle_description')
                            ->label('Description')
                            ->required()
                            ->maxLength(500),
                    ]),
                Fieldset::make('Vehicle Repair Page Meta')
                    ->schema([
                        Forms\Components\TextInput::make('vehicle_repair_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('vehicle_repair_description')
                            ->label('Description')
                            ->required()
                            ->maxLength(500),
                    ]),
                Fieldset::make('Claim Handling Page Meta')
                    ->schema([
                        Forms\Components\TextInput::make('claim_handling_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('claim_handling_description')
                            ->label('Description')
                            ->required()
                            ->maxLength(500),
                    ]),
            ]);
    }
}
