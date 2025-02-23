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
}
