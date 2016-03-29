<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MapController extends Controller
{
    //whoa
    public function map()
    {
        return view('public/map');
    }
}
