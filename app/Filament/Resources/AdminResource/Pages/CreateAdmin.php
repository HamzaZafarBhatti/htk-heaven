<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    public function getTitle(): string
    {
        return 'Create Admin';
    }

    protected function afterCreate(): void
    {
        $this->record->assignRole('Admin');
    }
}
