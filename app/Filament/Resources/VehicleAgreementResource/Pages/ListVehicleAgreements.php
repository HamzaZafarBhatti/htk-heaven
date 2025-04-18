<?php

namespace App\Filament\Resources\VehicleAgreementResource\Pages;

use App\Filament\Resources\VehicleAgreementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVehicleAgreements extends ListRecords
{
    protected static string $resource = VehicleAgreementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('New Agreement'),
        ];
    }
}
