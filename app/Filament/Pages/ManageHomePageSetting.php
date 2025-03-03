<?php

namespace App\Filament\Pages;

use App\Enums\IconsEnum;
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
                                                            ->helperText(new HtmlString('Recommended size: 530x700'))
                                                            ->image()
                                                            ->rules([
                                                                'dimensions:max_height=700,max_width=530',
                                                            ])
                                                            ->directory('banners')
                                                            ->required(),
                                                        Fieldset::make('support')
                                                            ->schema([
                                                                Select::make('support_icon')
                                                                    ->options(IconsEnum::toArray())
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
                                                FileUpload::make('aboutus_background_image_left')
                                                    ->label('Background Image Left')
                                                    ->helperText(new HtmlString('Recommended size: 500x562'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=562,max_width=500',
                                                    ])
                                                    ->directory('aboutus')
                                                    ->required(),
                                                FileUpload::make('aboutus_background_image_right')
                                                    ->label('Background Image Right')
                                                    ->helperText(new HtmlString('Recommended size: 456x496'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=496,max_width=456',
                                                    ])
                                                    ->directory('aboutus')
                                                    ->required(),
                                                FileUpload::make('aboutus_main_image_top')
                                                    ->label('Main Image Top')
                                                    ->helperText(new HtmlString('Recommended size: 453x300'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=300,max_width=453',
                                                    ])
                                                    ->directory('aboutus')
                                                    ->required(),
                                                FileUpload::make('aboutus_main_image_bottom')
                                                    ->label('Main Image Bottom')
                                                    ->helperText(new HtmlString('Recommended size: 330x390'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=390,max_width=330',
                                                    ])
                                                    ->directory('aboutus')
                                                    ->required(),
                                                TextInput::make('aboutus_experience')
                                                    ->label('Experience (years)')
                                                    ->numeric()
                                                    ->required(),
                                            ]),
                                        Textarea::make('aboutus_text')
                                            ->label('Text')
                                            ->required(),
                                        Repeater::make('aboutus_services')
                                            ->label('Services')
                                            ->schema([
                                                Select::make('icon')
                                                    ->options(IconsEnum::toArray())
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
                                        FileUpload::make('claim_status_background_image')
                                            ->label('Background Image')
                                            ->helperText(new HtmlString('Recommended size: 1920x400'))
                                            ->image()
                                            ->rules([
                                                'dimensions:max_height=400,max_width=1920',
                                            ])
                                            ->directory('claimstatus')
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
                                                FileUpload::make('image')
                                                    ->label('Image')
                                                    ->helperText(new HtmlString('Recommended size: 245×236'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=236,max_width=245',
                                                    ])
                                                    ->directory('services')
                                                    ->required(),
                                                FileUpload::make('hover_image')
                                                    ->label('Hover Image')
                                                    ->helperText(new HtmlString('Recommended size: 416×276'))
                                                    ->image()
                                                    ->rules([
                                                        'dimensions:max_height=276,max_width=416',
                                                    ])
                                                    ->directory('services')
                                                    ->required(),
                                                TextInput::make('url_slug')
                                                    ->label('URL Slug')
                                                    ->url()
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
                                                    ->options(IconsEnum::toArray())
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->label('Title')
                                                    ->required(),
                                            ]),
                                        TextArea::make('text')
                                            ->label('Text')
                                            ->required(),
                                        FileUpload::make('hover_image')
                                            ->label('Hover Image')
                                            ->helperText(new HtmlString('Recommended size: 416×350'))
                                            ->image()
                                            ->rules([
                                                'dimensions:max_height=350,max_width=416',
                                            ])
                                            ->directory('whyus')
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
                                FileUpload::make('feedback_background_image')
                                    ->label('Background Image')
                                    ->helperText(new HtmlString('Recommended size: 456×496'))
                                    ->image()
                                    ->rules([
                                        'dimensions:max_height=496,max_width=456',
                                    ])
                                    ->directory('feedback')
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
                                        FileUpload::make('image')
                                            ->label('Image')
                                            ->helperText(new HtmlString('Recommended size: 230×230'))
                                            ->image()
                                            ->rules([
                                                'dimensions:max_height=230,max_width=230',
                                            ])
                                            ->directory('process')
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
