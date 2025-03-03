<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSetting extends Settings
{
    //banner
    public array $banner_slides;
    //about us
    public string|null $aboutus_tagline;
    public string|null $aboutus_title;
    public string|null $aboutus_text;
    public array $aboutus_services;
    public array $aboutus_points;
    public string|null $aboutus_background_image_left;
    public string|null $aboutus_background_image_right;
    public string|null $aboutus_main_image_top;
    public string|null $aboutus_main_image_bottom;
    public string|null $aboutus_experience;
    //claim status
    public string|null $claim_status_title;
    public string|null $claim_status_text;
    public string|null $claim_status_background_image;
    //services
    public string|null $services_tagline;
    public string|null $services_title;
    public array $service_items;
    //why us
    public string|null $why_us_tagline;
    public string|null $why_us_title;
    public array $why_us_items;
    //feedback
    public string|null $feedback_title;
    public string|null $feedback_background_image;
    public array $feedback_items;
    //process
    public string|null $process_tagline;
    public string|null $process_text;
    public array $process_items;

    public static function group(): string
    {
        return 'homepage';
    }
}
