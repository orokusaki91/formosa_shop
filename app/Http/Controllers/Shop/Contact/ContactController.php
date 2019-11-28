<?php

namespace App\Http\Controllers\Shop\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('themes.custom.pages.contact');
    }
}
