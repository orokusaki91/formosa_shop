<?php

namespace App\Http\Controllers\Shop\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('themes.custom.pages.about_us');
    }
}
