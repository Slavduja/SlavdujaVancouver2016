<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

     * thos method below will send you to the log in page because you're not authorized..
     * only use on pages you want authorized
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('home');
    }

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
