<?php

namespace App\Http\Controllers;

use App\Enums\CountryEnum;
use App\Http\Requests\AccidentClaimRequest;
use App\Mail\AccidentClaimSubmitEmail;
use App\Mail\AdminAccidentClaimSubmitEmail;
use App\Models\InsuranceCoverType;
use App\Models\Service;
use App\Services\AccidentClaimService;
use App\Settings\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function how_is_it_free()
    {
        return view('frontend.how_is_it_free');
    }
    public function replacement_vehicle()
    {
        return view('frontend.replacement_vehicle');
    }
    public function report_claim()
    {
        return view('frontend.report_claim');
    }
    public function report_claim_store(AccidentClaimRequest $request, AccidentClaimService $accidentClaimService, SiteSetting $siteSetting)
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
    public function accident_repairs()
    {
        $countries = CountryEnum::toArray();
        $insurance_cover_types = InsuranceCoverType::active()->pluck('name', 'id');
        return view('frontend.accident_repairs', compact(
            'countries',
            'insurance_cover_types'
        ));
    }
    public function thankyou_page()
    {
        // return view('frontend.thankyou_page');
    }
    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }
    public function cookie_policy()
    {
        return view('frontend.cookie_policy');
    }
    public function terms_and_conditions()
    {
        return view('frontend.terms_and_conditions');
    }
    public function complaints_procedure()
    {
        return view('frontend.complaints_procedure');
    }

    public function service_show($slug)
    {
        $service = Service::whereSlug($slug)->firstOrFail();
        // $faq_chunks = collect($service->faqs)->chunk(2);
        // return $faq_chunks->first();
        return view('frontend.service_show', compact('service'));
    }
}
