<?php

namespace App\Filament\Resources\RoadTrafficAccidentResource\Pages;

use App\Filament\Resources\RoadTrafficAccidentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoadTrafficAccidents extends ListRecords
{
    protected static string $resource = RoadTrafficAccidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('New Record'),
        ];
    }
}
