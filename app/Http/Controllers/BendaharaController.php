<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;

class BendaharaController extends Controller
{
    Public function index(){
        $data = Progres::with('permohonan')->where('status',6)->get();
        return view('pages.bendahara.bendahara', compact('data'));
    }
}
