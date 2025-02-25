<?php

namespace App\Filament\Pages;

use App\Settings\HomePageSetting;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Illuminate\Support\HtmlString;

class ManageHomePageSetting extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $title = "Home Page Settings";

    protected static string $settings = HomePageSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()
                    ->schema([
                        Step::make('Banners')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        Repeater::make('banner_slides')
                                            ->schema([
                                                Grid::make(2)
                                                    ->schema([
                                                        TextInput::make('title')
                                                            ->label('Title')
                                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                            ->required(),
                                                        Textarea::make('text')
                                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                            ->label('Text')
                                                            ->required(),
                                                        FileUpload::make('image')
                                                            ->image()
                                                            ->maxWidth(530)
                                                            ->maxHeight(700)
                                                            ->directory('banners')
                                                            ->required(),
                                                        Fieldset::make('support')
                                                            ->schema([
                                                                Select::make('support_icon')
                                                                    ->options([
                                                                        'icon-magnifying-glass' => 'Magnifying Glass',
                                                                        'icon-right-arrow' => 'Right Arrow',
                                                                        'icon-up-arrow' => 'Up Arrow',
                                                                        'icon-down-arrow' => 'Down Arrow',
                                                                        'icon-cashback' => 'Cash Back',
                                                                        'icon-insurance' => 'Insurance',
                                                                        'icon-house' => 'House',
                                                                        'icon-family' => 'Family',
                                                                        'icon-drive' => 'Drive',
                                                                        'icon-home' => 'Home',
                                                                        'icon-heart-beat' => 'Heart Beat',
                                                                        'icon-fire' => 'Fire',
                                                                        'icon-briefcase' => 'Briefcase',
                                                                        'icon-ring' => 'Ring',
                                                                        'icon-plane' => 'Plane',
                                                                        'icon-easy-to-use' => 'Easy To Use',
                                                                        'icon-policy' => 'Policy',
                                                                        'icon-contract' => 'Contract',
                                                                        'icon-fund' => 'Fund',
                                                                        'icon-group' => 'Group',
                                                                        'icon-insurance-1' => 'Insurance 1',
                                                                        'icon-success' => 'Success',
                                                                        'icon-life-insurance' => 'Life Insurance',
                                                                        'icon-folder' => 'Folder',
                                                                        'icon-telephone' => 'Telephone',
                                                                        'icon-email' => 'Email',
                                                                        'icon-telephone-call' => 'Telephone Call',
                                                                        'icon-pin' => 'Pin',
                                                                        'icon-cash-flow' => 'Cash Flow',
                                                                        'icon-profits' => 'Profits',
                                                                        'icon-insurance-2' => 'Insurance 2',
                                                                        'icon-select' => 'Select',
                                                                        'icon-meeting' => 'Meeting',
                                                                        'icon-agreement' => 'Agreement',
                                                                        'icon-insurance-agent' => 'Insurance Agent',
                                                                        'icon-tick' => 'Tick',
                                                                        'icon-money-back' => 'Money Back',
                                                                        'icon-employees' => 'Employees',
                                                                        'icon-mission' => 'Mission',
                                                                        'icon-computer' => 'Computer',
                                                                        'icon-chat' => 'Chat',
                                                                        'icon-file' => 'File',
                                                                        'icon-plus' => 'Plus',
                                                                        'icon-shield' => 'Shield',
                                                                    ])
                                                                    ->required(),
                                                                TextInput::make('support_title')
                                                                    ->label('Title')
                                                                    ->required(),
                                                                TextInput::make('support_text')
                                                                    ->label('Text')
                                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                                    ->required(),
                                                            ])
                                                            ->columns(3)
                                                    ]),
                                            ])
                                            ->addActionLabel('Add Banner Slide')
                                            ->collapsible(),
                                    ]),
                            ]),
                        Step::make('About Us')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('aboutus_tagline')
                                                    ->label('Tagline')
                                                    ->required(),
                                                TextInput::make('aboutus_title')
                                                    ->label('Title')
                                                    ->required(),
                                            ]),
                                        Textarea::make('aboutus_text')
                                            ->label('Text')
                                            ->required(),
                                        Repeater::make('aboutus_services')
                                            ->label('Services')
                                            ->schema([
                                                Select::make('icon')
                                                    ->options([
                                                        'icon-magnifying-glass' => 'Magnifying Glass',
                                                        'icon-right-arrow' => 'Right Arrow',
                                                        'icon-up-arrow' => 'Up Arrow',
                                                        'icon-down-arrow' => 'Down Arrow',
                                                        'icon-cashback' => 'Cash Back',
                                                        'icon-insurance' => 'Insurance',
                                                        'icon-house' => 'House',
                                                        'icon-family' => 'Family',
                                                        'icon-drive' => 'Drive',
                                                        'icon-home' => 'Home',
                                                        'icon-heart-beat' => 'Heart Beat',
                                                        'icon-fire' => 'Fire',
                                                        'icon-briefcase' => 'Briefcase',
                                                        'icon-ring' => 'Ring',
                                                        'icon-plane' => 'Plane',
                                                        'icon-easy-to-use' => 'Easy To Use',
                                                        'icon-policy' => 'Policy',
                                                        'icon-contract' => 'Contract',
                                                        'icon-fund' => 'Fund',
                                                        'icon-group' => 'Group',
                                                        'icon-insurance-1' => 'Insurance 1',
                                                        'icon-success' => 'Success',
                                                        'icon-life-insurance' => 'Life Insurance',
                                                        'icon-folder' => 'Folder',
                                                        'icon-telephone' => 'Telephone',
                                                        'icon-email' => 'Email',
                                                        'icon-telephone-call' => 'Telephone Call',
                                                        'icon-pin' => 'Pin',
                                                        'icon-cash-flow' => 'Cash Flow',
                                                        'icon-profits' => 'Profits',
                                                        'icon-insurance-2' => 'Insurance 2',
                                                        'icon-select' => 'Select',
                                                        'icon-meeting' => 'Meeting',
                                                        'icon-agreement' => 'Agreement',
                                                        'icon-insurance-agent' => 'Insurance Agent',
                                                        'icon-tick' => 'Tick',
                                                        'icon-money-back' => 'Money Back',
                                                        'icon-employees' => 'Employees',
                                                        'icon-mission' => 'Mission',
                                                        'icon-computer' => 'Computer',
                                                        'icon-chat' => 'Chat',
                                                        'icon-file' => 'File',
                                                        'icon-plus' => 'Plus',
                                                        'icon-shield' => 'Shield',
                                                    ])
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                    ->required(),
                                            ])
                                            ->addActionLabel('Add Service')
                                            ->defaultItems(3)
                                            ->minItems(3)
                                            ->maxItems(3)
                                            ->collapsible()
                                            ->columns(2),
                                        Repeater::make('aboutus_points')
                                            ->label('Points')
                                            ->schema([
                                                TextInput::make('point')
                                                    ->required(),
                                            ])
                                            ->addActionLabel('Add Point')
                                            ->collapsible()
                                    ]),
                            ]),
                        Step::make('Claim Status')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        TextInput::make('claim_status_title')
                                            ->label('Title')
                                            ->required(),
                                        Textarea::make('claim_status_text')
                                            ->label('Text')
                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                            ->required(),
                                    ]),
                            ]),
                        Step::make('Services')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('services_tagline')
                                                    ->label('Tagline')
                                                    ->required(),
                                                TextInput::make('services_title')
                                                    ->label('Title')
                                                    ->required(),
                                            ]),
                                        Repeater::make('service_items')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Title')
                                                    ->required(),
                                                TextArea::make('text')
                                                    ->label('Text')
                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                    ->required(),
                                            ])
                                            ->addActionLabel('Add Service')
                                            ->grid(2)
                                            ->collapsible()
                                    ]),
                            ]),
                        Step::make('Why Choose Us')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('why_us_tagline')
                                            ->label('Tagline')
                                            ->required(),
                                        TextInput::make('why_us_title')
                                            ->label('Title')
                                            ->required(),
                                    ]),
                                Repeater::make('why_us_items')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                Select::make('icon')
                                                    ->options([
                                                        'icon-magnifying-glass' => 'Magnifying Glass',
                                                        'icon-right-arrow' => 'Right Arrow',
                                                        'icon-up-arrow' => 'Up Arrow',
                                                        'icon-down-arrow' => 'Down Arrow',
                                                        'icon-cashback' => 'Cash Back',
                                                        'icon-insurance' => 'Insurance',
                                                        'icon-house' => 'House',
                                                        'icon-family' => 'Family',
                                                        'icon-drive' => 'Drive',
                                                        'icon-home' => 'Home',
                                                        'icon-heart-beat' => 'Heart Beat',
                                                        'icon-fire' => 'Fire',
                                                        'icon-briefcase' => 'Briefcase',
                                                        'icon-ring' => 'Ring',
                                                        'icon-plane' => 'Plane',
                                                        'icon-easy-to-use' => 'Easy To Use',
                                                        'icon-policy' => 'Policy',
                                                        'icon-contract' => 'Contract',
                                                        'icon-fund' => 'Fund',
                                                        'icon-group' => 'Group',
                                                        'icon-insurance-1' => 'Insurance 1',
                                                        'icon-success' => 'Success',
                                                        'icon-life-insurance' => 'Life Insurance',
                                                        'icon-folder' => 'Folder',
                                                        'icon-telephone' => 'Telephone',
                                                        'icon-email' => 'Email',
                                                        'icon-telephone-call' => 'Telephone Call',
                                                        'icon-pin' => 'Pin',
                                                        'icon-cash-flow' => 'Cash Flow',
                                                        'icon-profits' => 'Profits',
                                                        'icon-insurance-2' => 'Insurance 2',
                                                        'icon-select' => 'Select',
                                                        'icon-meeting' => 'Meeting',
                                                        'icon-agreement' => 'Agreement',
                                                        'icon-insurance-agent' => 'Insurance Agent',
                                                        'icon-tick' => 'Tick',
                                                        'icon-money-back' => 'Money Back',
                                                        'icon-employees' => 'Employees',
                                                        'icon-mission' => 'Mission',
                                                        'icon-computer' => 'Computer',
                                                        'icon-chat' => 'Chat',
                                                        'icon-file' => 'File',
                                                        'icon-plus' => 'Plus',
                                                        'icon-shield' => 'Shield',
                                                    ])
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->label('Title')
                                                    ->required(),
                                            ]),
                                        TextArea::make('text')
                                            ->label('Text')
                                            ->required(),
                                    ])
                                    ->addActionLabel('Add Item')
                                    ->collapsible()
                            ]),
                        Step::make('Testimonials')
                            ->schema([
                                TextInput::make('feedback_title')
                                    ->label('Title')
                                    ->required(),
                                Repeater::make('feedback_items')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('customer_name')
                                                    ->required(),
                                                TextInput::make('customer_job'),
                                            ]),
                                        TextArea::make('feedback')
                                            ->required(),
                                    ])
                                    ->addActionLabel('Add Feedback')
                                    ->collapsible()
                            ]),
                        Step::make('Process')
                            ->schema([
                                TextInput::make('process_tagline')
                                    ->label('Tagline')
                                    ->required(),
                                TextArea::make('process_text')
                                    ->label('text')
                                    ->required(),
                                Repeater::make('process_items')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                        TextArea::make('text')
                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                            ->required(),
                                    ])
                                    ->maxItems(3)
                                    ->addActionLabel('Add Step')
                                    ->collapsible()
                            ])
                    ])
                    ->columnSpanFull()
                    ->skippable(),
            ]);
    }
}
