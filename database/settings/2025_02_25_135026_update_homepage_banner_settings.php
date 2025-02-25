<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->delete('homepage.banner_title');
        $this->migrator->delete('homepage.banner_text');
        $this->migrator->add('homepage.banner_slides', []);
    }
};
