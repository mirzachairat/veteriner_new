<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapviewController extends Controller
{
    public function mapview(){
        $result = Permohonan::get();
        $data = json_decode($result);
        return view('pages.maps.mapview', compact('data'));
    }
}
