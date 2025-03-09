<?php

namespace App\Filament\Resources\RoadTrafficAccidentResource\Pages;

use App\Filament\Resources\RoadTrafficAccidentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoadTrafficAccident extends EditRecord
{
    protected static string $resource = RoadTrafficAccidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if ($third_party = $this->record->third_party) {
            $data['tp_title'] = $third_party->tp_title;
            $data['tp_first_name'] = $third_party->tp_first_name;
            $data['tp_last_name'] = $third_party->tp_last_name;
            $data['tp_address_line_1'] = $third_party->tp_address_line_1;
            $data['tp_address_line_2'] = $third_party->tp_address_line_2;
            $data['tp_city'] = $third_party->tp_city;
            $data['tp_postal_code'] = $third_party->tp_postal_code;
            $data['tp_country'] = $third_party->tp_country;
            $data['tp_email'] = $third_party->tp_email;
            $data['tp_phone'] = $third_party->tp_phone;
            $data['tp_vehicle_registration'] = $third_party->tp_vehicle_registration;
            $data['tp_vehicle_make'] = $third_party->tp_vehicle_make;
            $data['tp_vehicle_model'] = $third_party->tp_vehicle_model;
            $data['tp_vehicle_colour'] = $third_party->tp_vehicle_colour;
            $data['tp_vehicle_year'] = $third_party->tp_vehicle_year;
            $data['tp_insurance_company'] = $third_party->tp_insurance_company;
            $data['tp_insurance_policy_number'] = $third_party->tp_insurance_policy_number;
            $data['tp_insurance_company_phone'] = $third_party->tp_insurance_company_phone;
            $data['tp_passengers_count'] = $third_party->tp_passengers_count;
            $data['tp_vehicle_speed'] = $third_party->tp_vehicle_speed;
            $data['tp_vehicle_damage'] = $third_party->tp_vehicle_damage;
        }

        if ($witness = $this->record->witness) {
            $data['witness_title'] = $witness->witness_title;
            $data['witness_first_name'] = $witness->witness_first_name;
            $data['witness_last_name'] = $witness->witness_last_name;
            $data['witness_address_line_1'] = $witness->witness_address_line_1;
            $data['witness_address_line_2'] = $witness->witness_address_line_2;
            $data['witness_city'] = $witness->witness_city;
            $data['witness_postal_code'] = $witness->witness_postal_code;
            $data['witness_country'] = $witness->witness_country;
            $data['witness_email'] = $witness->witness_email;
            $data['witness_phone'] = $witness->witness_phone;
            $data['is_cctv'] = $witness->is_cctv;
        }

        return $data;
    }
}
