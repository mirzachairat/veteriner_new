<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Dokumen;
use App\Models\Progres;
use App\Models\Workflow;
use App\Models\Filedokumen;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view ('landingpage'); 
    }


//fungsi ini di panggi menuju halamana view download dokumen dan dokumen proses    
public function detail($id)
    {
        $jabatan_id = Auth::user()->jabatan_id;
        
        //jabatan sebagai pemohon
        if($jabatan_id == 1){
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
            $data_progres =  Progres::where('permohonan_id', $id)->with('workflow')->get();
            $file_dokumen = Filedokumen::where('permohonan_id',$id)->get();
            return view('pages.pengirim.view_pengirim',compact(['data_permohonan','data_dok','data_progres','file_dokumen']));
        }

        // jabatan sebagai penerima
        if($jabatan_id == 2 ){
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            $data_permohonan = Permohonan::with('user')->with('jenis_sampel')->where('id', $id)->get();
            $data_progres =  Progres::where('permohonan_id', $id)->with('workflow')->get();
            return view('pages.penerima.view_penerima',compact(['data_permohonan', 'data_dok','data_progres']));
        }

        // jabatan sebagai manager
        if($jabatan_id == 3 ){
            // $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            $data_permohonan = Permohonan::with('user')->where('id', $id)->get();
            return view('pages.manager.view_manager',compact(['data_permohonan', 'data_dok']));
        }

        //jabatan sebagai penyelia
        if($jabatan_id == 4 ){
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            $data_permohonan = Permohonan::with('user')->where('id', $id)->get();
            return view('pages.penyelia.view_penyelia',compact(['data_permohonan', 'data_dok']));
        }

        //jabatan sebagai penguji
        if($jabatan_id == 5 ){
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            // $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            // return $data_dok;
            $data_permohonan = Permohonan::with('user')->where('id', $id)->get();
            return view('pages.penguji.view_penguji',compact(['data_permohonan', 'data_dok']));
        }

        //jabatan sebagai bendahara
        if($jabatan_id == 6 ){
            $data_dok = Dokumen::with('workflow')->where('permohonan_id', $id)->get();
            // $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
            // return $data_dok;
            $data_permohonan = Permohonan::with('user')->where('id', $id)->get();
            return view('pages.bendahara.view_bendahara',compact(['data_permohonan', 'data_dok']));
        }

        return view('dashboard', compact(['data_permohonan', 'data_dok']));
    }
    
        public function admin_detail(){
            $jabatan_id = Auth::user()->jabatan_id;
            if($jabatan_id == 2){
                $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
                $data_permohonan = Permohonan::get();
            }
        }    
}