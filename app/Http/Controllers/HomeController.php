<?php

namespace App\Http\Controllers;

use App\Enums\CountryEnum;
use App\Models\InsuranceCoverType;
use Illuminate\Http\Request;

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
    public function accident_repairs()
    {
        $countries = CountryEnum::toArray();
        $insurance_cover_types = InsuranceCoverType::active()->pluck('name', 'id');
        return view('frontend.accident_repairs', compact(
            'countries',
            'insurance_cover_types'
        ));
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
}
