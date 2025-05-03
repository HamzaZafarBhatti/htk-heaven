<?php

namespace App\Http\Controllers;

use App\Enums\CountryEnum;
use App\Models\AccidentManagementForm;
use App\Models\RoadTrafficAccident;
use App\Models\User;
use App\Models\VehicleAgreement;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function rta_download($id)
    {
        $rta = RoadTrafficAccident::with('cover_type', 'third_party', 'witness')->find($id);
        $data = [
            'logo' => asset('assets/images/update-17-06-2023/resources/main-menu-logo.png'),
            'rta' => $rta,
        ];
        // return view('backend.pdfs.rta', $data);
        $name = 'RTA-' . $rta->rta_number . '.pdf';
        $pdf = Pdf::loadView('backend.pdfs.rta', $data);
        $pdf->setPaper('a4');
        return $pdf->download($name);
    }

    public function accident_management_download($id)
    {
        $accident_management = AccidentManagementForm::with('road_traffic_accident.third_party')->find($id);
        $actions = $accident_management->actions ? collect($accident_management->actions)->where('is_hidden', false) : collect();
        $events = $accident_management->events ? collect($accident_management->events)->where('is_hidden', false) : collect();
        $users = [];
        if ($actions->count() > 0 || $events->count() > 0) {
            if ($actions->count() > 0) {
                $actions_user_ids = $actions->pluck('user_id')->unique();
            }
            if ($events->count() > 0) {
                $events_user_ids = $events->pluck('user_id')->unique();
            }
            $user_ids = $actions_user_ids->merge($events_user_ids)->unique()->toArray();
            $users = User::whereIn('id', $user_ids)->pluck('name', 'id')->toArray();
        }
        $data = [
            'logo' => asset('assets/images/update-17-06-2023/resources/main-menu-logo.png'),
            'accident_management' => $accident_management,
            'actions' => $actions,
            'events' => $events,
            'users' => $users,
        ];
        // return view('backend.pdfs.accident_management', $data);
        $name = 'RTA-' . $accident_management->ref_number . '.pdf';
        $pdf = Pdf::loadView('backend.pdfs.accident_management', $data);
        $pdf->setPaper('a4');
        return $pdf->download($name);
    }

    public function vehicle_hire_download($id)
    {
        $agreement = VehicleAgreement::find($id);
        $data = [
            'logo' => asset('assets/images/update-17-06-2023/resources/main-menu-logo.png'),
            'agreement' => $agreement,
        ];
        // return view('backend.pdfs.agreement', $data);
        $name = str_replace('/', '-', $agreement->ref_number) . '.pdf';
        $pdf = Pdf::loadView('backend.pdfs.agreement', $data);
        $pdf->setPaper('a4');
        return $pdf->download($name);
    }
}
