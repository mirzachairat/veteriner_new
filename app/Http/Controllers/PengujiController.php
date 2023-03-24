<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Dokumen;

class PengujiController extends Controller
{
    public function index(){
        $data = Progres::with('permohonan')->where('status',3)->get();
        return view('pages.penguji.penguji', compact('data'));
        // return $data;
    }

    public function form_detail($id)
    {
        $data_detail = Permohonan::with('jenis_sampel')->where('id', $id)->get();
        $data_sample = Jenis_sampel::with('jenis_harga')->where('permohonan_id', $id)->get();
        return view('pages.penguji.form_penguji', compact(['data_detail','data_sample']));
    }

    //menampilkan tabel semua user yang telah di kirim untuk di cetak dokumen pdf    
    public function view_allform(){
        $data = Permohonan::with('jenis_sampel')->get();
        return view('pages.penguji.detail_penguji', compact('data'));
    }

    public function update_jenis_sampel(Request $request){
        $permohonan_id = $request->permohonan_id;
        $status_a = $request->status_delete;
        $data_permohonan = Permohonan::where('id', $permohonan_id)->first();
        Jenis_sampel::where('permohonan_id', $request->permohonan_id[0])->delete();
        Progres::where('status', $status_a)->where('permohonan_id',$permohonan_id)->delete();

        foreach ($request->jenis_pengujian as $index => $item) {
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
         }
        
         $progress = Progres::create([
             "permohonan_id" => $request->permohonan_id[0],
             "workflow_id" => $request->workflow_id,
             "status" => $request->status
         ]);
         
         $dokumen = Dokumen::create([
            'permohonan_id' => $request->permohonan_id[0],
            'workflow_id' => $request->workflow_id,
            'approval' => $request->approval
        ]);

         return redirect('/penguji');
    }
}
