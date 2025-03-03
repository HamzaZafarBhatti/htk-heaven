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
use Illuminate\Validation\Rule;

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
                                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
                                                        Textarea::make('text')
                                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.'))
                                                            ->label('Text'),
                                                        FileUpload::make('image')
                                                            ->helperText(new HtmlString('Recommended size: 530x700'))
                                                            ->image()
                                                            ->rules([
                                                                Rule::dimensions()->maxWidth(530)->maxHeight(700),
                                                            ])
                                                            ->directory('banners'),
                                                        Fieldset::make('support')
                                                            ->schema([
                                                                Select::make('support_icon')
                                                                    ->options(IconsEnum::toArray()),
                                                                TextInput::make('support_title')
                                                                    ->label('Title'),
                                                                TextInput::make('support_text')
                                                                    ->label('Text')
                                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
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
                                                    ->label('Tagline'),
                                                TextInput::make('aboutus_title')
                                                    ->label('Title'),
                                                FileUpload::make('aboutus_background_image_left')
                                                    ->label('Background Image Left')
                                                    ->helperText(new HtmlString('Recommended size: 500x562'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(562)->maxWidth(500),
                                                    ])
                                                    ->directory('aboutus'),
                                                FileUpload::make('aboutus_background_image_right')
                                                    ->label('Background Image Right')
                                                    ->helperText(new HtmlString('Recommended size: 456x496'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(496)->maxWidth(456),
                                                    ])
                                                    ->directory('aboutus'),
                                                FileUpload::make('aboutus_main_image_top')
                                                    ->label('Main Image Top')
                                                    ->helperText(new HtmlString('Recommended size: 453x300'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(300)->maxWidth(453),
                                                    ])
                                                    ->directory('aboutus'),
                                                FileUpload::make('aboutus_main_image_bottom')
                                                    ->label('Main Image Bottom')
                                                    ->helperText(new HtmlString('Recommended size: 330x390'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(390)->maxWidth(330),
                                                    ])
                                                    ->directory('aboutus'),
                                                TextInput::make('aboutus_experience')
                                                    ->label('Experience (years)')
                                                    ->numeric(),
                                            ]),
                                        Textarea::make('aboutus_text')
                                            ->label('Text'),
                                        Repeater::make('aboutus_services')
                                            ->label('Services')
                                            ->schema([
                                                Select::make('icon')
                                                    ->options(IconsEnum::toArray()),
                                                TextInput::make('title')
                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
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
                                                TextInput::make('point'),
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
                                            ->label('Title'),
                                        Textarea::make('claim_status_text')
                                            ->label('Text')
                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
                                        FileUpload::make('claim_status_background_image')
                                            ->label('Background Image')
                                            ->helperText(new HtmlString('Recommended size: 1920x400'))
                                            ->image()
                                            ->rules([
                                                Rule::dimensions()->maxHeight(400)->maxWidth(1920),
                                            ])
                                            ->directory('claimstatus'),
                                    ]),
                            ]),
                        Step::make('Services')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('services_tagline')
                                                    ->label('Tagline'),
                                                TextInput::make('services_title')
                                                    ->label('Title'),
                                            ]),
                                        Repeater::make('service_items')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Title'),
                                                TextArea::make('text')
                                                    ->label('Text')
                                                    ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
                                                FileUpload::make('image')
                                                    ->label('Image')
                                                    ->helperText(new HtmlString('Recommended size: 245×236'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(236)->maxWidth(245),
                                                    ])
                                                    ->directory('services'),
                                                FileUpload::make('hover_image')
                                                    ->label('Hover Image')
                                                    ->helperText(new HtmlString('Recommended size: 416×276'))
                                                    ->image()
                                                    ->rules([
                                                        Rule::dimensions()->maxHeight(276)->maxWidth(416),
                                                    ])
                                                    ->directory('services'),
                                                TextInput::make('url_slug')
                                                    ->label('URL Slug')
                                                    ->url(),
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
                                            ->label('Tagline'),
                                        TextInput::make('why_us_title')
                                            ->label('Title'),
                                    ]),
                                Repeater::make('why_us_items')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                Select::make('icon')
                                                    ->options(IconsEnum::toArray()),
                                                TextInput::make('title')
                                                    ->label('Title'),
                                            ]),
                                        TextArea::make('text')
                                            ->label('Text'),
                                        FileUpload::make('hover_image')
                                            ->label('Hover Image')
                                            ->helperText(new HtmlString('Recommended size: 416×350'))
                                            ->image()
                                            ->rules([
                                                Rule::dimensions()->maxHeight(350)->maxWidth(416),
                                            ])
                                            ->directory('whyus'),
                                    ])
                                    ->addActionLabel('Add Item')
                                    ->collapsible()
                            ]),
                        Step::make('Testimonials')
                            ->schema([
                                TextInput::make('feedback_title')
                                    ->label('Title'),
                                FileUpload::make('feedback_background_image')
                                    ->label('Background Image')
                                    ->helperText(new HtmlString('Recommended size: 456×496'))
                                    ->image()
                                    ->rules([
                                        Rule::dimensions()->maxHeight(496)->maxWidth(456),
                                    ])
                                    ->directory('feedback'),
                                Repeater::make('feedback_items')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('customer_name'),
                                                TextInput::make('customer_job'),
                                            ]),
                                        TextArea::make('feedback'),
                                    ])
                                    ->addActionLabel('Add Feedback')
                                    ->collapsible()
                            ]),
                        Step::make('Process')
                            ->schema([
                                TextInput::make('process_tagline')
                                    ->label('Tagline'),
                                TextArea::make('process_text')
                                    ->label('text'),
                                Repeater::make('process_items')
                                    ->schema([
                                        TextInput::make('title'),
                                        TextArea::make('text')
                                            ->helperText(new HtmlString('You can use <b>HTML</b> tags here.')),
                                        FileUpload::make('image')
                                            ->label('Image')
                                            ->helperText(new HtmlString('Recommended size: 230×230'))
                                            ->image()
                                            ->rules([
                                                Rule::dimensions()->maxHeight(230)->maxWidth(230),
                                            ])
                                            ->directory('process'),
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
