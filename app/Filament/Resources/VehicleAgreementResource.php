<?php

namespace App\Filament\Resources;

use App\Enums\CountryEnum;
use App\Filament\Resources\VehicleAgreementResource\Pages;
use App\Filament\Resources\VehicleAgreementResource\RelationManagers;
use App\Models\VehicleAgreement;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class VehicleAgreementResource extends Resource
{
    protected static ?string $model = VehicleAgreement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Agreement Details')
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                DatePicker::make('start_date')
                                    ->label('Agreement Start Date')
                                    ->required(),
                                TimePicker::make('start_time')
                                    ->required(),
                                DatePicker::make('end_date')
                                    ->label('Agreement End Date')
                                    ->required(),
                                TimePicker::make('end_time')
                                    ->required(),
                            ]),
                        TextInput::make('driver_reference')
                            ->label('Reference Number (Driver Number)')
                            ->required(),
                    ]),
                Section::make('Hirer Details')
                    ->schema([
                        Fieldset::make('Name')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('first_name')
                                    ->required(),
                                TextInput::make('middle_name'),
                                TextInput::make('last_name')
                                    ->required(),
                            ])->columns(4),
                        Grid::make(3)
                            ->schema([
                                DatePicker::make('dob')
                                    ->label('Date of Birth')
                                    ->required(),
                                TextInput::make('email')
                                    ->email()
                                    ->required(),
                                TextInput::make('phone')
                                    ->required(),
                            ]),
                        Fieldset::make('Address')
                            ->schema([
                                TextInput::make('address_line_1')
                                    ->required(),
                                TextInput::make('address_line_2'),
                                Grid::make()
                                    ->schema([
                                        TextInput::make('city')
                                            ->required(),
                                        TextInput::make('postal_code')
                                            ->label('Postal / Zip Code')
                                            ->required(),
                                        Select::make('country')
                                            ->options(CountryEnum::toArray())
                                            ->searchable()
                                            ->default('GB')
                                            ->required(),
                                    ])->columns(3),
                            ]),
                        Grid::make(3)
                            ->schema([
                                TextInput::make('license_number')
                                    ->label('Driving License Number')
                                    ->required(),
                                DatePicker::make('license_expiry_date')
                                    ->label('DVLA Expiry Date')
                                    ->required(),
                                Select::make('license_issuing_country')
                                    ->label('Country License Issued')
                                    ->options(CountryEnum::toArray())
                                    ->searchable()
                                    ->default('GB')
                                    ->required(),
                            ]),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('pco_badge_number')
                                    ->label('PCO Badge Number')
                                    ->required(),
                                DatePicker::make('pco_badge_expiry_date')
                                    ->label('PCO Badge Expiry')
                                    ->required(),
                                TextInput::make('nin')
                                    ->label('National Insurance Number')
                                    ->required(),
                                TextInput::make('nationality')
                                    ->required(),
                            ]),
                    ]),
                Section::make('Vehicle Details')
                    ->schema([
                        TextInput::make('vehicle_registration_number')
                            ->label('Vehicle Registration')
                            ->required(),
                        TextInput::make('vehicle_make')
                            ->label('Make')
                            ->required(),
                        TextInput::make('vehicle_model')
                            ->label('Model')
                            ->required(),
                        TextInput::make('vehicle_colour')
                            ->label('Colour')
                            ->required(),
                    ])->columns(4),
                Section::make('The Schedule (Agreed Price)')
                    ->schema([
                        TextInput::make('storage')
                            ->required(),
                        TextInput::make('daily_rent')
                            ->prefix('£')
                            ->numeric()
                            ->required(),
                        TextInput::make('rental_term'),
                        TextInput::make('e_reference')
                            ->label('E-Reference')
                            ->required(),
                    ])->columns(2),
                Section::make('Documents')
                    ->schema([
                        Textarea::make('notes'),
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('driving_licence_front')
                                    ->label('Driving License Front Side')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('driving_licence_back')
                                    ->label('Driving License Back Side')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('pco_badge_front')
                                    ->label('PCO Badge Front Side')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('pco_badge_back')
                                    ->label('PCO Badge Back Side')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('pco_license_paper_part')
                                    ->label('PCO License Paper Part')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                            ]),
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('proof_of_id')
                                    ->label('Proof Of ID')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('nin_image')
                                    ->label('National Insurance Number')
                                    ->directory('vehicle-agreements')
                                    ->required(),
                                FileUpload::make('proof_of_address1')
                                    ->label('Proof Of Address 1')
                                    ->directory('vehicle-agreements')
                                    ->helperText('Proof of address must be one month old.')
                                    ->required(),
                                FileUpload::make('proof_of_address2')
                                    ->label('Proof Of Address 2')
                                    ->directory('vehicle-agreements')
                                    ->helperText('Proof of address must be one month old.')
                                    ->required(),
                            ])
                    ]),
                Section::make('Signatures')
                    ->schema([
                        SignaturePad::make('customer_signature')
                            ->label('Signature (Hirer)')
                            ->dotSize(2.0)
                            ->lineMinWidth(0.5)
                            ->lineMaxWidth(2.5)
                            ->throttle(16)
                            ->minDistance(5)
                            ->velocityFilterWeight(0.7)
                            ->required(),
                        SignaturePad::make('company_signature')
                            ->label('Signature')
                            ->dotSize(2.0)
                            ->lineMinWidth(0.5)
                            ->lineMaxWidth(2.5)
                            ->throttle(16)
                            ->minDistance(5)
                            ->velocityFilterWeight(0.7),
                        DatePicker::make('customer_signature_date')
                            ->label('Date')
                            ->default(now())
                            ->required(),
                        DatePicker::make('company_signature_date')
                            ->label('Date')
                            ->default(now())
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vehicle_registration_number')
                    ->label('Vehicle')
                    ->description(fn(VehicleAgreement $record): string => $record->vehicle_model_make_colour)
                    ->searchable(),
                TextColumn::make('full_name')
                    ->label('Hirer')
                    ->description(fn(VehicleAgreement $record): string => "Email: {$record->email}, Phone: {$record->phone}")
                    ->searchable(),
                TextColumn::make('agreement_period')
                    ->label('Agreement Period')
                    ->searchable(),
                TextColumn::make('daily_rent')
                    ->searchable()
                    ->sortable(),
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
                        ->url(fn($record) => route("vehicle-agreements.download.pdf", $record->id)),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVehicleAgreements::route('/'),
            'create' => Pages\CreateVehicleAgreement::route('/create'),
            'edit' => Pages\EditVehicleAgreement::route('/{record}/edit'),
        ];
    }
}
