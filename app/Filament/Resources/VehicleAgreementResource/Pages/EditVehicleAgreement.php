<?php

namespace App\Filament\Resources\VehicleAgreementResource\Pages;

use App\Filament\Resources\VehicleAgreementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVehicleAgreement extends EditRecord
{
    protected static string $resource = VehicleAgreementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
