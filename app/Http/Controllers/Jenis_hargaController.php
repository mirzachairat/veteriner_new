<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jenis_harga;

class Jenis_hargaController extends Controller
{
    public function index(){
        $data = Jenis_harga::get();
        return view('pages.daftar_harga.daftar_harga', compact('data'));
    }

    public function tambahharga(Request $request){
        $data_jenis = Jenis_harga::create([
            'jenis_lab' => $request->jenis_lab,
            'jenis_pengujian' => $request->jenis_pengujian,
            'satuan' => $request->satuan,
            'tarif' => $request->tarif,
            'lama_pengujian' => $request->lama_pengujian
        ]);
        return redirect()->back();
    }
    
    public function deleteharga($id){
        Jenis_harga::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function  vieweditform($id){
        $data_edit = Jenis_harga::where('id',$id)->get();  
        return view('pages.daftar_harga.editForm',compact('data_edit'));
    }

    public function updateharga(Request $request){
        $id_harga = $request->id_harga;
        Jenis_harga::where('id',$id_harga)->update([
            'jenis_pengujian' => $request->jenis_pengujian,
            'satuan' => $request->satuan,
            'tarif' => $request->tarif,
            'lama_pengujian' => $request->lama_pengujian
        ]);
        return redirect()->route('pageharga');
    }


    // cari harga katogory jenis
    public function getHarga(Request $request){
        $id = $request->input('id');
        $data =  Jenis_harga::find($id);
        return response($data);
    }
    
}
