<?php

namespace App\Filament\Resources\AccidentClaimResource\Pages;

use App\Filament\Resources\AccidentClaimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccidentClaims extends ListRecords
{
    protected static string $resource = AccidentClaimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
