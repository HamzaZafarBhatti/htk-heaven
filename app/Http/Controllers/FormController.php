<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function layout()
    {
        return view('backend.forms.create');
    }
    public function layout2()
    {
        return view('backend.forms._create');
    }
}
