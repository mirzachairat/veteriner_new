<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Penerima;
use App\Models\Progres;
use App\Models\Dokumen;
use App\Models\Jenis_harga;
use App\Models\Filedokumen;
use Carbon\Carbon;


class PenerimaController extends Controller
{
    //menampilkan tabel pemohon 
    public function index()
    {
        $data = Progres::with('permohonan')->with('workflow')->where('status',0)->get();
        return view('pages.penerima.penerima', compact('data'));
    }

    //menampilkan tabel semua user yang telah di kirim untuk di cetak dokumen pdf    
    public function view_allform(){
        $data = Permohonan::with('jenis_sampel')->with('progres')->get();
        return view('pages.penerima.detail_penerima', compact('data'));
    }

    //menampilkan data ke form inputan
    public function form_detail($id)
    {
        $data_detail = Permohonan::with('jenis_sampel')->where('id', $id)->get();
        $data_sample = Jenis_sampel::with('jenis_harga')->where('permohonan_id', $id)->get();
        return view('pages.penerima.form_penerima', compact(['data_detail','data_sample']));
    }

    public function update_jenis_sampel(Request $request){ 
        $permohonan_id = $request->permohonan_id;
        
        Jenis_sampel::where('permohonan_id', $request->permohonan_id[0])->delete();

        $status_update = $request->status_delete;
  
        
        Progres::where('status', $status_update)->where('permohonan_id',$permohonan_id)->delete();
    
            foreach ($request->permohonan_id as $index => $item) {
                $data_jenis = Jenis_sampel::create([
                    'permohonan_id' => $request->permohonan_id[$index],
                    'jenis_sampel' => $request->jenis_sampel[$index],
                    'jenis_pengujian' => $request->jenis_pengujian[$index],
                    'jumlah_contoh' => $request->jumlah_contoh[$index],
                    'harga_satuan' => $request->harga_satuan[$index],
                    'total_harga' => $request->total_harga[$index],
                    'bahan_pengawet' => $request->bahan_pengawet[$index],
                    'kondisi' => $request->kondisi[$index],
                    'kriteria' => $request->kriteria[$index],
                ]);
                Permohonan::where('id',$request->permohonan_id)->update([
                    'users_id' => $request->users_id,
                    'no_epi' => $request->no_epi,
                    'tgl_terima' => $request->tgl_terima,
                    'tgl_diserahkan_mt' => $request->tgl_diserahkan_mt,
                    'jumlah' => $request->jumlah_seluruhnya,
                    'jenis_hewan' => $request->jenis_hewan
                ]);
            }
        

            $data_filedokumen = Filedokumen::where('permohonan_id',$permohonan_id)->get();
            foreach($data_filedokumen as $item_dok){
                Filedokumen::where('permohonan_id',$item_dok->permohonan_id)->update([
                    'id' => $item_dok->id,
                    'permohonan_id' => $item_dok->permohonan_id,
                    'kode_file' => 1,
                    'status' => 2,
                    'file_link' => $item_dok->file_link
                ]);
            }


         Progres::create([
             "permohonan_id" => $request->permohonan_id[0],
             "workflow_id" => $request->workflow_id,
             "status" => $request->status
         ]);

         Dokumen::create([
            'permohonan_id' => $request->permohonan_id[0],
            'workflow_id' => $request->workflow_id,
            'approval' => $request->approval
        ]);


 
         return redirect('/penerima');
    }

     public function view_dokument($id){
        $data_dok = Dokumen::where('jabatan_id', $jabatan_id)->get();
        $data_permohonan = Permohonan::with('user')->where('users_id', auth()->id())->where('id', $id)->get();
        return view('pages.penerima.view_penerima',compact(['data_permohonan', 'data_dok']));
     }

     //Serfitikat diupload manual berdasarkan permohonan_id

     public function upload_sertifikat(Request $request, $id){
        $validasi_data = $request->validate([
            'file' => 'image|file|max:1024' 
        ]);
         
        if($request->file('image')){
                $validasi_data['file_link'] = $request->file('image')->store('post-images');
        }

        $validasi_data['permohonan_id'] = $id;
        //2 sertifikat 
        $validasi_data['kode_file'] = 2;
        $validasi_data['status'] = 2;
        
        Filedokumen::create($validasi_data);
        
        return redirect()->back();
    }
}    