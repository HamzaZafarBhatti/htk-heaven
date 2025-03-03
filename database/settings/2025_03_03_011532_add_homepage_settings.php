<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('homepage.aboutus_background_image_left', '');
        $this->migrator->add('homepage.aboutus_background_image_right', '');
        $this->migrator->add('homepage.aboutus_main_image_top', '');
        $this->migrator->add('homepage.aboutus_main_image_bottom', '');
        $this->migrator->add('homepage.aboutus_experience', '');
        $this->migrator->add('homepage.claim_status_background_image', '');
        $this->migrator->add('homepage.feedback_background_image', '');
    }
};
