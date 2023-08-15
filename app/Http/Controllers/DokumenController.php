<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Models\Permohonan;
use App\Models\Jenis_harga;
use App\Models\Jenis_sampel;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Auth;


class DokumenController extends Controller
{
   
    public function filepdf($id){
        $user = Auth::user()->id;

        //parameter sebagai view pdf berdasarkan type jabatan approval
        $pengguna = User::where('id',$user)->first('jabatan_id'); 
        
        //data user pemohon berdasarkan id pemohon
        $user_pemohon = Permohonan::with('user')->where('id',$id)->get();
      
        //menyajikan data jenis sampel berdasarkan id permohonan
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        $jenis = Jenis_sampel::with('jenis_harga')->where('permohonan_id', $permohonan->id)->get();
        $dokumen = Dokumen::get('id');
        $data_pass = [
                'nama' => $permohonan->nama,
                'jenis_hewan' => $permohonan->jenis_hewan,
                'alamat' => $permohonan->alamat,
                'no_epi' => $permohonan->no_epi,
                'tgl_terima' => $permohonan->tgl_terima,
                'tgl_diserahkan_mt' => $permohonan->tgl_diserahkan_mt,
                'jumlah' => $permohonan->jumlah,
                'saran' => $permohonan->saran,
                'kesimpulan' => $permohonan->kesimpulan,
                'catatan' => $permohonan->catatan,
                'jenis' => $jenis,
                'users' => $user_pemohon
            ];
        
        //berdasarkan type jabatan user    
        if($pengguna->jabatan_id == 1){
                $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
                return $pdf->stream('Pemohon.pdf');
        }    

        //user manager    
        if($pengguna->jabatan_id == 2){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F3',$data_pass);
            return $pdf->stream('Kontrak Pengujian.pdf');
        }

         //user penerima    
         if($pengguna->jabatan_id == 3){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F2', $data_pass);
            return $pdf->stream('Penerima.pdf');
            }

        //user penyelia
        if($pengguna->jabatan_id == 4){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F6',$data_pass);
            return $pdf->stream('Kesimpulan Diagnosa.pdf');
        }
    }

    public function sertifikat($id){
        // $user = Auth::user()->id;
        // $user_data = User::where('id',$user)->get();
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        $jenis = Jenis_sampel::where('permohonan_id', $permohonan->id)
                                ->with('jenis_harga')
                                ->get();                        
        $data_pass = [
                'nama' => $permohonan->nama,
                'instansi' => $permohonan->instansi,
                'jenis_hewan' => $permohonan->jenis_hewan,
                'alamat' => $permohonan->alamat,
                'instansi' => $permohonan->instansi,
                'no_epi' => $permohonan->no_epi,
                'tgl_terima' => $permohonan->tgl_terima,
                'tgl_diserahkan_mt' => $permohonan->tgl_diserahkan_mt,
                'jumlah' => $permohonan->jumlah,
                'saran' => $permohonan->saran,
                'kesimpulan' => $permohonan->kesimpulan,
                'catatan' => $permohonan->catatan,
                'jenis' => $jenis
                // 'jenis_sampel' => $jenis->jenis_sampel,
                // 'jumlah_contoh' => $jenis->jumlah_contoh,
                // 'bahan_pengawet' => $jenis->bahan_pengawet,
                // 'kondisi' => $jenis->kondisi,
                // 'kriteria' => $jenis->kriteria, 
                // 'jenis_pengujian' => $jenis->jenis_pengujian,
                // 'total_harga' => $jenis->total_harga,
            ];
            $pdf = Pdf::loadView('pages.pdf_template.hasil_pengujian',$data_pass);
            return $pdf->stream('Sertifikat.pdf');
    }
}