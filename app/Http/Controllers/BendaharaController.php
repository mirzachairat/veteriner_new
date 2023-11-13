<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Filedokumen;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class BendaharaController extends Controller
{
    Public function index(){
        $data = Progres::with('permohonan')->where('status',6)->get();
        return view('pages.bendahara.view_bendahara', compact('data'));
    }
    //Menampilkan data ke halaman form
    public function form_detail($id)
    {
        $data = Jenis_sampel::with('permohonan')->where('permohonan_id', $id)->get();
        $users = Permohonan::with('user')->where('id', $id)->get();
        $files =  Filedokumen::where('permohonan_id',$id)->first('file_link');
        return view('pages.bendahara.form_bendahara', compact(['data','users','files']));
    }   
}
