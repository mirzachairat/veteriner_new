<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_harga;
use Illuminate\Support\Facades\Session;
use App\Models\Dokumen;
use App\Models\Jenis_sampel;
use App\Models\Progres;
use App\Models\Workflow;
use App\Models\Tagihan;
use App\Models\Invoice;
use App\Models\Filedokumen;
use Illuminate\Support\Facades\Auth;


class PengirimController extends Controller
{
    public function index()
    {
        $id=[];
        $data=[];
        $data_work=[];
        // $data = Permohonan::with('jenis_sampel')->with('user')->where('users_id', auth()->id())->get();
        if($data != ''){
           $data = Permohonan::where('users_id', auth()->id())->get();
           foreach($data as $item_data){
               $id = $item_data->id;
           }
           $data_work = Progres::with('workflow')->where('permohonan_id',$id)->get();
           return view('pages.pengirim.pengirim', compact('data','data_work'));
        }else{
           return view('pages.pengirim.pengirim', compact('data', 'data_work'));
       }
    }

    public function billing($id){
        $data = Jenis_sampel::with('permohonan')->where('permohonan_id', $id)->get();
        $users = Permohonan::with('user')->with('progres')->where('id', $id)->get();
        $data_tagihan = Tagihan::where('permohonan_id',$id)->get();
        return view('pages.pengirim.billing', compact(['data','users','data_tagihan']));
    }

    public function file_upload(Request $request, $id){
        $validasi_data = $request->validate([
            'file' => 'image|file|max:1024' 
        ]);
        
        if($request->file('image')){
                $validasi_data['file_link'] = $request->file('image')->store('post-images');
        }

        $validasi_data['permohonan_id'] = $id;
        //1 invoice 
        $validasi_data['kode_file'] = 1;
       
        Filedokumen::create($validasi_data);
        
        return redirect()->back();
    }

    public function form_permohonan()
    {
        $data_harga = Jenis_harga::get();
        return view('pages.pengirim.form_pengirim', compact('data_harga'));
    }

    public function download_file($id){
        $permohonan = Permohonan::where('users_id',auth()->id())->where('id',$id)->first();
        $data_pass = [
            'nama_pemohon' => $permohonan->nama_pemohon,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan
        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
        return $pdf->download('Permohonan.pdf');
    }
}