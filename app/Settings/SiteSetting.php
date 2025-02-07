<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSetting extends Settings
{
    public string $email;
    public string $phone;
    public string $mobile;
    public string $address;
    public string $facebook;
    public string $tiktok;
    public string $whatsapp;

    public static function group(): string
    {
        return 'site';
    }
}
