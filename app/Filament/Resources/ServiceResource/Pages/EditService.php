<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use App\Models\Service;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('preview')
                ->url(fn(Service $record): string => route('service.show', ['slug' => $record->slug]))
                ->color('success')
                ->openUrlInNewTab()
                ->icon('heroicon-o-eye')
                ->label('Preview'),
        ];
    }
}
