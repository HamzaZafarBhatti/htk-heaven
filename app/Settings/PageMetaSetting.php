<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageMetaSetting extends Settings
{
    public string $home_title;
    public string $home_description;
    public string $recovery_of_vehicle_title;
    public string $recovery_of_vehicle_description;
    public string $comparable_vehicle_title;
    public string $comparable_vehicle_description;
    public string $vehicle_repair_title;
    public string $vehicle_repair_description;
    public string $claim_handling_title;
    public string $claim_handling_description;

    public static function group(): string
    {
        return 'pagemeta';
    }
}
