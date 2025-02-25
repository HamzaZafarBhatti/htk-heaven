<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        //banner
        $this->migrator->add('homepage.banner_title', '');
        $this->migrator->add('homepage.banner_text', '');
        //about us
        $this->migrator->add('homepage.aboutus_tagline', '');
        $this->migrator->add('homepage.aboutus_title', '');
        $this->migrator->add('homepage.aboutus_text', '');
        $this->migrator->add('homepage.aboutus_services', []);
        $this->migrator->add('homepage.aboutus_points', []);
        //claim status
        $this->migrator->add('homepage.claim_status_title', '');
        $this->migrator->add('homepage.claim_status_text', '');
        //services
        $this->migrator->add('homepage.services_tagline', '');
        $this->migrator->add('homepage.services_title', '');
        $this->migrator->add('homepage.service_items', []);
        //why us
        $this->migrator->add('homepage.why_us_tagline', '');
        $this->migrator->add('homepage.why_us_title', '');
        $this->migrator->add('homepage.why_us_items', []);
        //feedback
        $this->migrator->add('homepage.feedback_title', '');
        $this->migrator->add('homepage.feedback_items', []);
        //process
        $this->migrator->add('homepage.process_tagline', '');
        $this->migrator->add('homepage.process_text', '');
        $this->migrator->add('homepage.process_items', []);
    }
};
