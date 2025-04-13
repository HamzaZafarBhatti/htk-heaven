<?php

namespace App\Filament\Resources\AccidentManagementFormResource\Pages;

use App\Filament\Resources\AccidentManagementFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAccidentManagementForm extends ViewRecord
{
    protected static string $resource = AccidentManagementFormResource::class;

    protected static string $view = 'filament.resources.accident-management-form.pages.view';
}
