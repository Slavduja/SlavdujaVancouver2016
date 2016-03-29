<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RenterController extends Controller
{
    public function howitworks()
    {
        return view('public/howitworks');
    }

    public function contact()
    {
        return view('public/contact');
    }

    public function faq()
    {
        return view('public/FAQ');
    }
}
