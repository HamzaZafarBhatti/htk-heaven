<?php

namespace App\Filament\Resources\VehicleAgreementResource\Pages;

use App\Filament\Resources\VehicleAgreementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

class CreateVehicleAgreement extends CreateRecord
{
    protected static string $resource = VehicleAgreementResource::class;

    public function getHeader(): ?View
    {
        return view('filament.resources.custom-header', [
            'breadcrumbs' => $this->getBreadcrumbs(),
            'title' => 'Vehicle Hire Agreement',
            'description' => 'Please note this is a legally binding contract only sign this if you agree to be bound by all its terms. The hire period on this document is legally binding. You will be obliged to pay the entire length of the contract even if you wish to return the car early. Please read all terms and conditions before you sign this agreement set out by HTK Heaven Ltd on this hire agreement. This Agreement may be signed by electronic signature (as defined in the Electronic Communications Act 2000) and shall have the same legal effect, validity and enforceability as if signed by hand written signature to the extent and as provided for in any applicable law (including the Electronic Communications Act 2000).',
        ]);
    }
}
