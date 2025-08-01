<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use App\Models\Invoice;
use Filament\Actions;
use Filament\Resources\Pages\Page;

class PrintInvoice extends Page
{
    protected static string $resource = InvoiceResource::class;

    protected static string $view = 'filament.resources.invoice-resource.pages.print-invoice';

    public Invoice $record;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('download')
                ->label('Download Invoice')
                ->icon('heroicon-o-document-arrow-down')
                ->color('success')
                ->url(fn() => route('invoice.download.pdf', $this->record->id)),
        ];
    }
}
