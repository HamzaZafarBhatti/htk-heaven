<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('pagemeta.home_title', '');
        $this->migrator->add('pagemeta.home_description', '');
        $this->migrator->add('pagemeta.recovery_of_vehicle_title', '');
        $this->migrator->add('pagemeta.recovery_of_vehicle_description', '');
        $this->migrator->add('pagemeta.comparable_vehicle_title', '');
        $this->migrator->add('pagemeta.comparable_vehicle_description', '');
        $this->migrator->add('pagemeta.vehicle_repair_title', '');
        $this->migrator->add('pagemeta.vehicle_repair_description', '');
        $this->migrator->add('pagemeta.claim_handling_title', '');
        $this->migrator->add('pagemeta.claim_handling_description', '');
    }
};
