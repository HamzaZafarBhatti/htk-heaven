<?php

namespace App\Filament\Resources\AccidentClaimResource\Pages;

use App\Filament\Resources\AccidentClaimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccidentClaim extends EditRecord
{
    protected static string $resource = AccidentClaimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
