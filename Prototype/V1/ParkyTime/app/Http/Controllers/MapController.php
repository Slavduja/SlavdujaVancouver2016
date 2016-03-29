<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MapController extends Controller
{
    //whoa
    public function map()
    {
            $response = \GoogleMaps::load('geocoding')
                ->setParam (['address' =>'vancouver'])
                ->get();

            var_dump($response); // , ['response' => $response]
        return view('public/map', []);
    }
}
