<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estacionamiento;

class SearchController extends Controller
{
    public function index (Request $request) {
        dd($request->all());
        $search = Estacionamiento::where('latitud', '<', ( $request->get('lati') + $request->get('dla') ))
                    ->where('latitud', '<', ( $request->get('lati') - $request->get('dla') ))
                    ->where('latitud', '<', ( $request->get('longi') + $request->get('dlo') ))
                    ->where('latitud', '<', ( $request->get('longi') - $request->get('dlo') ))
                    ->get();

        return response()->json([
            'data' => $search
        ]);
    }
}
