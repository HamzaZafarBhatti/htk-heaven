<?php

namespace App\Filament\Resources\InsuranceCoverTypeResource\Pages;

use App\Filament\Resources\InsuranceCoverTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInsuranceCoverTypes extends ListRecords
{
    protected static string $resource = InsuranceCoverTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
