<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progres;
use App\Models\Permohonan;
use App\Models\Jenis_sampel;
use App\Models\Dokumen;

class PenyeliaController extends Controller
{
    public function index(){
        //status 2 hanya bisa dilihat penyelia pada tabel progres
        $data = Progres::with('permohonan')->where('status',2)->orWhere('status',4)->get();
        return view('pages.penyelia.penyelia', compact('data'));
        // return $data;
    }

    public function form_detail($id)
    {
        $data_detail = Permohonan::with('jenis_sampel')->where('id', $id)->get();
        $data_sample = Jenis_sampel::with('jenis_harga')->where('permohonan_id', $id)->get();
        $sts_progres = Progres::get('status');
        foreach($sts_progres as $item){
            $st_status = $item->status;
        }
        return view('pages.penyelia.form_penyelia', compact(['data_detail','data_sample','st_status']));
    }

     //menampilkan tabel semua user yang telah di approval untuk di cetak dokumen pdf
     public function view_allform(){
        $data = Permohonan::with('jenis_sampel')->get();
        return view('pages.penyelia.detail_penyelia', compact('data'));
    }

    // update status progress dan permohonan
    public function update_jenis_sampel(Request $request){
        $permohonan_id = $request->permohonan_id;
        $data_permohonan = Permohonan::where('id', $permohonan_id)->first();
        $status_a = $request->status_delete;
        $sts_progres = Progres::get('status');
        
        foreach($sts_progres as $item){
            $st_status = $item->status;
        }


        //kondisi penyelia sebagai approval
        if($st_status == 2){
            Progres::where('status', $status_a)->where('permohonan_id', $permohonan_id)->delete();
            Progres::create([
                "permohonan_id" => $request->permohonan_id[0],
                "workflow_id" => $request->workflow_id,
                "status" => $request->status
            ]);  

            $dokumen = Dokumen::create([
                'permohonan_id' => $request->permohonan_id[0],
                'workflow_id' => $request->workflow_id,
                'approval' => $request->approval
            ]);
        } else{
            Jenis_sampel::where('permohonan_id', $request->permohonan_id[0])->delete();
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
                     'tgl_uji' => $request->tgl_uji[$index],
                     'tgl_selesaiuji' => $request->tgl_selesaiuji[$index],
                     'nilai' => $request->nilai[$index],
                     'diagnosa' => $request->diagnosa[$index],
                 ]);
             }
            
             Permohonan::where('id',$request->permohonan_id)->update([
                // 'users_id' => $data_permohonan->users_id,
                // 'no_epi' => $data_permohonan->no_epi,
                // 'tgl_terima' => $data_permohonan->tgl_terima,
                // 'tgl_diserahkan_mt' => $data_permohonan->tgl_diserahkan_mt,
                // 'jumlah' => $data_permohonan->jumlah_seluruhnya,
                // 'jenis_hewan' => $data_permohonan->jenis_hewan,
                'kesimpulan' => $request->kesimpulan,
                'saran' => $request->saran,
                'catatan' => $request->catatans
            ]);

            Progres::where('permohonan_id',$permohonan_id)->delete();
            $progress = Progres::create([
                "permohonan_id" => $request->permohonan_id[0],
                "workflow_id" => 6,
                "status" => 5,
            ]);
            
            $dokumen = Dokumen::create([
               'permohonan_id' => $request->permohonan_id[0],
               'workflow_id' => 6,
               'approval' => $request->approval
           ]);
        }

         return redirect('/penyelia');
    }
}
