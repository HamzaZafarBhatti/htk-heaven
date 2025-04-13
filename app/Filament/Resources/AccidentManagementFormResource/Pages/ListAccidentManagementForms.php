<?php

namespace App\Filament\Resources\AccidentManagementFormResource\Pages;

use App\Filament\Resources\AccidentManagementFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccidentManagementForms extends ListRecords
{
    protected static string $resource = AccidentManagementFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
