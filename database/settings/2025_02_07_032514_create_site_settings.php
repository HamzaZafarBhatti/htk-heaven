<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.email', 'info@site.com');
        $this->migrator->add('site.phone', '0123456789');
        $this->migrator->add('site.mobile', '0123456789');
        $this->migrator->add('site.address', 'Abcd, xyz');
        $this->migrator->add('site.facebook', 'https://facebook.com');
        $this->migrator->add('site.tiktok', 'tiktok.com');
        $this->migrator->add('site.whatsapp', 'https://wa.me/923001234567');
    }
};
