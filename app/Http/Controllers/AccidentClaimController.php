<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccidentClaimRequest;
use App\Mail\AccidentClaimSubmitEmail;
use App\Mail\AdminAccidentClaimSubmitEmail;
use App\Models\RoadTrafficAccident;
use App\Models\RoadTrafficAccidentComment;
use App\Services\AccidentClaimService;
use App\Settings\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AccidentClaimController extends Controller
{
    //
    public function index()
    {
        $claims = RoadTrafficAccident::with('accident_claim')->where('user_id', auth()->user()->id)->get();
        return view('frontend.dashboard.claims.index', compact('claims'));
    }

    public function store(AccidentClaimRequest $request, AccidentClaimService $accidentClaimService, SiteSetting $siteSetting)
    {
        $data = $request->validated();
        try {
            $accident_claim = $accidentClaimService->store($data);
            try {
                Mail::to($accident_claim->email)->send(new AccidentClaimSubmitEmail(
                    name: $accident_claim->full_name,
                    car_registration_number: $accident_claim->car_registration_number,
                ));
                Mail::to($siteSetting->email)->send(new AdminAccidentClaimSubmitEmail(
                    name: $accident_claim->full_name,
                    car_registration_number: $accident_claim->car_registration_number,
                    phone: $accident_claim->phone,
                    email: $accident_claim->email,
                ));
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
            }
            return redirect()->route('home.thankyou-page');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function show($rta_number)
    {
        $id = RoadTrafficAccident::extractId($rta_number);
        $road_traffic_accident = RoadTrafficAccident::with('accident_claim')->findOrFail($id);
        return view('frontend.dashboard.claims.show', compact('road_traffic_accident'));
    }

    public function comments($id)
    {
        $comments = RoadTrafficAccidentComment::with('commenter:id,name')->where('road_traffic_accident_id', $id)->notHidden()->latest()->get();
        return view('frontend.dashboard.claims.comments', compact('comments'));
    }
}
