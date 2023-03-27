<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MapviewController extends Controller
{
    public function mapview(){
        return view('pages.maps.mapview');
    }
    public function json_titik(){
        $result = User::get();
        return json_decode($result);
    }
}
