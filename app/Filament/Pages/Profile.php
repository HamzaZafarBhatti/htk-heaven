<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.profile';
    protected static ?string $navigationLabel = 'Profile';
    protected static ?string $title = 'Profile';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique('users', 'email', auth()->user()),

                TextInput::make('current_password')
                    ->label('Current Password')
                    ->password()
                    ->rules(['required_with:new_password'])
                    ->currentPassword(),

                TextInput::make('new_password')
                    ->label('New Password')
                    ->password()
                    ->rules([
                        'confirmed',
                        Password::default(),
                    ])
                    ->confirmed(),

                TextInput::make('new_password_confirmation')
                    ->label('Confirm New Password')
                    ->password(),
            ])
            ->statePath('data');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->submit('save')
                ->button(),
        ];
    }

    public function save(): void
    {
        $this->validate();

        $data = $this->form->getState();

        $user = auth()->user();

        if ($data['new_password']) {
            if (!Hash::check($data['current_password'], $user->password)) {
                $this->addError('data.current_password', 'The current password is incorrect.');
                return;
            }

            $user->password = Hash::make($data['new_password']);
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        Notification::make()
            ->title('Profile Updated Successfully!')
            ->success()
            ->send();
    }
}
