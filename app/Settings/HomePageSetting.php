<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSetting extends Settings
{
    //banner
    public array $banner_slides;
    //about us
    public string $aboutus_tagline;
    public string $aboutus_title;
    public string $aboutus_text;
    public array $aboutus_services;
    public array $aboutus_points;
    public string $aboutus_background_image_left;
    public string $aboutus_background_image_right;
    public string $aboutus_main_image_top;
    public string $aboutus_main_image_bottom;
    public string $aboutus_experience;
    //claim status
    public string $claim_status_title;
    public string $claim_status_text;
    public string $claim_status_background_image;
    //services
    public string $services_tagline;
    public string $services_title;
    public array $service_items;
    //why us
    public string $why_us_tagline;
    public string $why_us_title;
    public array $why_us_items;
    //feedback
    public string $feedback_title;
    public string $feedback_background_image;
    public array $feedback_items;
    //process
    public string $process_tagline;
    public string $process_text;
    public array $process_items;

    public static function group(): string
    {
        return 'homepage';
    }
}
