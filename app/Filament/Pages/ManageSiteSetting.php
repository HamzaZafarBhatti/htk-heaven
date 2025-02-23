<?php

namespace App\Filament\Pages;

use App\Settings\SiteSetting;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageSiteSetting extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $title = "Site Settings";

    protected static string $settings = SiteSetting::class;

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('Superadmin')/*  || auth()->user()->can('edit-site-settings') */;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('email')->email()->required(),
                    TextInput::make('phone')->required(),
                    TextInput::make('mobile')->required(),
                    TextInput::make('address')->required(),
                    TextInput::make('facebook')->url()->required(),
                    TextInput::make('tiktok')->url()->required(),
                    TextInput::make('whatsapp')->url()->required(),
                ])->columns(2),
            ]);
    }
}
