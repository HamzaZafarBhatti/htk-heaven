<?php

namespace App\Http\Controllers;

use App\Enums\CountryEnum;
use App\Http\Requests\AccidentClaimRequest;
use App\Mail\AccidentClaimSubmitEmail;
use App\Mail\AdminAccidentClaimSubmitEmail;
use App\Models\InsuranceCoverType;
use App\Models\Service;
use App\Services\AccidentClaimService;
use App\Settings\HomePageSetting;
use App\Settings\PageMetaSetting;
use App\Settings\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct(private HomePageSetting $homepageSettings) {}

    public function index(PageMetaSetting $pageMetaSettings)
    {
        return view('frontend.index', [
            'homepageSettings' => $this->homepageSettings,
            'pageMetaSettings' => $pageMetaSettings,
        ]);
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
        return view('frontend.report_claim', [
            'user' => auth()->user(),
            'homepageSettings' => $this->homepageSettings,
        ]);
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
        return view('frontend.thankyou_page');
    }
    function about_us()
    {
        return view('frontend.about_us');
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

    public function service_show($slug, PageMetaSetting $pageMetaSettings)
    {
        $serviceName = ucfirst(str_replace('-', ' ', $slug));

        return view("frontend.services.$slug", [
            'serviceName' => $serviceName,
            'pageMetaSettings' => $pageMetaSettings,
            'homepageSettings' => $this->homepageSettings
        ]);
    }
}
