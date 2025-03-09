<?php

namespace App\Filament\Resources;

use App\Enums\CountryEnum;
use App\Filament\Resources\RoadTrafficAccidentResource\Pages;
use App\Filament\Resources\RoadTrafficAccidentResource\RelationManagers;
use App\Models\RoadTrafficAccident;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoadTrafficAccidentResource extends Resource
{
    protected static ?string $model = RoadTrafficAccident::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Forms';

    protected static ?int $navigationSort  = 2;

    public static function canAccess(): bool
    {
        return
            auth()->user()->hasRole('Superadmin') ||
            auth()->user()->hasRole('Admin');
        // return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Driver Details')
                        ->schema([
                            Section::make()
                                ->schema([
                                    DatePicker::make('accident_reporting_date')
                                        ->native(false)
                                        ->required(),
                                    TextInput::make('driver_reference')
                                        ->label('Driver Reference (Driver Number)')
                                        ->required(),
                                    TextInput::make('agreement_reference')
                                        ->label('Agreement Reference Number')
                                        ->required(),
                                ])->columns(3),
                            Section::make('Driver Details')
                                ->schema([
                                    Fieldset::make('Name')
                                        ->schema([
                                            TextInput::make('title')
                                                ->required(),
                                            TextInput::make('first_name')
                                                ->required(),
                                            TextInput::make('last_name')
                                                ->required(),
                                        ])->columns(3),
                                    TextInput::make('email')
                                        ->email()
                                        ->required(),
                                    TextInput::make('phone')
                                        ->required(),
                                    DatePicker::make('dob')
                                        ->native(false)
                                        ->label('Date of Birth')
                                        ->required(),
                                    TextInput::make('occupation'),
                                    Fieldset::make('Address')
                                        ->schema([
                                            TextInput::make('address_line_1')
                                                ->required(),
                                            TextInput::make('address_line_2')
                                                ->required(),
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
                                    TextInput::make('nin')
                                        ->label('National Insurance Number')
                                        ->required(),
                                    TextInput::make('injury_type')
                                        ->label('Type of Injury'),
                                    Grid::make()
                                        ->schema([
                                            TextInput::make('insurance_company')
                                                ->label("Driver's Insurance Company"),
                                            TextInput::make('insurance_policy_number'),
                                            Select::make('cover_type_id')
                                                ->label('Cover Type')
                                                ->relationship(name: 'cover_type', titleAttribute: 'name'),
                                            TextInput::make('insurance_company_phone'),
                                        ])->columns(4),
                                    Toggle::make('is_police_reported')
                                        ->label('Did Driver Report to the police?')
                                        ->inline(false)
                                        ->live(),
                                    TextInput::make('cad_reference_number')
                                        ->label('If Yes, What is CAD reference Number?')
                                        ->visible(fn(Get $get): bool => $get('is_police_reported'))
                                ])->columns(2),
                        ]),
                    Wizard\Step::make('Vehicle Details')
                        ->schema([
                            Section::make()
                                ->schema([
                                    Grid::make()
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
                                            TextInput::make('vehicle_year')
                                                ->label('Year')
                                                ->required(),
                                        ])
                                        ->columns(5),
                                    Toggle::make('is_vehicle_road_worthy')
                                        ->label('Vehicle Road Worthy')
                                        ->inline(false),
                                    TextInput::make('vehicle_damage'),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Third Party Details')
                        ->schema([
                            Section::make()
                                ->schema([
                                    Fieldset::make('Name')
                                        ->schema([
                                            TextInput::make('tp_title')
                                                ->label('Title'),
                                            TextInput::make('tp_first_name')
                                                ->label('First Name'),
                                            TextInput::make('tp_last_name')
                                                ->label('Last Name'),
                                        ])->columns(3),
                                    Fieldset::make('Address')
                                        ->schema([
                                            TextInput::make('tp_address_line_1')
                                                ->label('Address Line 1'),
                                            TextInput::make('tp_address_line_2')
                                                ->label('Address Line 2'),
                                            Grid::make()
                                                ->schema([
                                                    TextInput::make('tp_city')
                                                        ->label('City'),
                                                    TextInput::make('tp_postal_code')
                                                        ->label('Postal / Zip Code'),
                                                    Select::make('tp_country')
                                                        ->label('Country')
                                                        ->options(CountryEnum::toArray())
                                                        ->searchable()
                                                        ->default('GB'),
                                                ])->columns(3),
                                        ]),
                                    TextInput::make('tp_email')
                                        ->label('Email')
                                        ->email(),
                                    TextInput::make('tp_phone')
                                        ->label('Phone'),
                                    Grid::make()
                                        ->schema([
                                            TextInput::make('tp_vehicle_registration')
                                                ->label('TP Vehicle Registration'),
                                            TextInput::make('tp_vehicle_make')
                                                ->label('Make'),
                                            TextInput::make('tp_vehicle_model')
                                                ->label('Model'),
                                            TextInput::make('tp_vehicle_colour')
                                                ->label('Colour'),
                                            TextInput::make('tp_vehicle_year')
                                                ->label('Year'),
                                        ])
                                        ->columns(5),
                                    Grid::make()
                                        ->schema([
                                            TextInput::make('tp_insurance_company')
                                                ->label("TP Insurance Company"),
                                            TextInput::make('tp_insurance_policy_number')
                                                ->label("Insurance Policy Number"),
                                            TextInput::make('tp_insurance_company_phone')
                                                ->label("Insurance Company Phone"),
                                        ])->columns(3),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Occupancies in the Vehicle')
                        ->schema([
                            Section::make()
                                ->schema([
                                    TextInput::make('passengers_count')
                                        ->label("Number of Pessengers in HTK Driver's Vehicle")
                                        ->numeric()
                                        ->required(),
                                    TextInput::make('tp_passengers_count')
                                        ->label("Number of Pessenger in Third Party's Vehicle")
                                        ->numeric(),
                                    Toggle::make('is_passenger_injured')
                                        ->label('Is Any of pessenger injured?')
                                        ->inline(false)
                                        ->live(),
                                    TextInput::make('passenger_injury_type')
                                        ->label('Type of Injury')
                                        ->visible(fn(Get $get): bool => $get('is_passenger_injured'))
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Independent Witness')
                        ->schema([
                            Section::make()
                                ->schema([
                                    Fieldset::make('Name')
                                        ->schema([
                                            TextInput::make('witness_title')
                                                ->label('Title'),
                                            TextInput::make('witness_first_name')
                                                ->label('First Name'),
                                            TextInput::make('witness_last_name')
                                                ->label('Last Name'),
                                        ])->columns(3),
                                    Fieldset::make('Address')
                                        ->schema([
                                            TextInput::make('witness_address_line_1')
                                                ->label('Address Line 1'),
                                            TextInput::make('witness_address_line_2')
                                                ->label('Address Line 2'),
                                            Grid::make()
                                                ->schema([
                                                    TextInput::make('witness_city')
                                                        ->label('City'),
                                                    TextInput::make('witness_postal_code')
                                                        ->label('Postal / Zip Code'),
                                                    Select::make('witness_country')
                                                        ->label('Country')
                                                        ->options(CountryEnum::toArray())
                                                        ->searchable()
                                                        ->default('GB'),
                                                ])->columns(3),
                                        ]),
                                    TextInput::make('witness_email')
                                        ->label('Email')
                                        ->email(),
                                    TextInput::make('witness_phone')
                                        ->label('Phone'),
                                    Toggle::make('is_cctv')
                                        ->label('CCTV')
                                        ->inline(false),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Accident Details')
                        ->schema([
                            Section::make()
                                ->schema([
                                    Grid::make()
                                        ->schema([
                                            DatePicker::make('accident_date')
                                                ->native(false)
                                                ->required(),
                                            TimePicker::make('accident_time')
                                                ->seconds(false)
                                                ->required(),
                                            TextInput::make('accident_location')
                                                ->label('Location / Postcode')
                                                ->required(),
                                        ])->columns(3),
                                    TextInput::make('journey_purpose')
                                        ->label('Purpose of Journey'),
                                    Toggle::make('was_driver_wearing_seat_belt')
                                        ->label('Was the driver wearing seat belt?')
                                        ->inline(false),
                                    TextInput::make('weather_condition'),
                                    TextInput::make('road_condition'),
                                    TextInput::make('vehicle_speed')
                                        ->label("Speed of HTK Driver's Vehicle"),
                                    TextInput::make('tp_vehicle_speed')
                                        ->label("Speed of Third Party's Vehicle"),
                                    Grid::make()
                                        ->schema([
                                            TextInput::make('vehicle_damage')
                                                ->label('HTK Vehicle Damage'),
                                            TextInput::make('tp_vehicle_damage')
                                                ->label('Third Party Vehicle Damage'),
                                        ])->columns(1),
                                    TextInput::make('police_reference_number'),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Incident Details')
                        ->schema([
                            Section::make()
                                ->schema([
                                    Textarea::make('circumstances')
                                        ->helperText('Please write the incident details.'),
                                    Textarea::make('notes')
                                        ->helperText('Any Other Relavant information.')
                                ])
                        ]),
                    Wizard\Step::make('Upload Pictures')
                        ->schema([
                            Section::make()
                                ->schema([
                                    FileUpload::make('pictures')
                                        ->label('Upload Pictures')
                                        ->image()
                                        ->multiple()
                                        ->maxFiles(10)
                                        ->directory('rta-pictures')
                                        ->reorderable(),
                                    FileUpload::make('insurance_certificate')
                                        ->label('Insurance Policy Certificate')
                                        ->directory('insurance-certificate'),
                                    FileUpload::make('contract')
                                        ->label('Contract')
                                        ->directory('contract'),
                                    FileUpload::make('id_proof')
                                        ->label('Proof of Address, ID')
                                        ->directory('id-proof'),
                                    FileUpload::make('others')
                                        ->label('Other')
                                        ->multiple()
                                        ->maxFiles(5)
                                        ->directory('other')
                                        ->reorderable(),

                                ])
                                ->columns(2),
                        ]),
                ])
                    ->skippable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('rta_number')
                    ->label('RTA Number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('full_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('accident_date')->date(),
                TextColumn::make('accident_location')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('driver_wearing_seat_belt')
                    ->label('Driver Wearing Seat Belt?')
                    ->sortable(),
                TextColumn::make('status')
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'pending' => 'Pending',
                        'in_progress' => 'In Progress',
                        'approved' => 'Approved',
                        'completed' => 'Completed',
                        'rejected' => 'Rejected',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'gray',
                        'in_progress' => 'warning',
                        'approved' => 'success',
                        'completed' => 'info',
                        'rejected' => 'danger',
                    })
                    ->sortable(),
                TextColumn::make('vehicle_registration_number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('insurance_company')
                    ->description(fn(RoadTrafficAccident $record): string => $record->insurance_policy_number)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')->date(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoadTrafficAccidents::route('/'),
            'create' => Pages\CreateRoadTrafficAccident::route('/create'),
            'edit' => Pages\EditRoadTrafficAccident::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
