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
    public function filepdf1($id)
    {
        $permohonan = Permohonan::with('user')->where('users_id',auth()->id())->where('id',$id)->first();
        $data_pass = [
            'nama' => $permohonan->nama,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->user->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan
        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
        return $pdf->download('Permohonan.pdf');
    }
    public function filepdf($id)
    {
        $user = Auth::user()->id;
        $user_data = User::where('id',$user)->get();
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        $jenis = Jenis_sampel::where('permohonan_id', $permohonan->id)->get();
        $dokumen = Dokumen::get('id');
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
           
        //user pemohon    
        if($user == 1){
                $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
                return $pdf->download('Pemohon.pdf');
        }    

        //user penerima    
        if($user == 2){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F2', $data_pass);
            return $pdf->download('Penerima.pdf');
            }

        //user manager    
        if($user == 3){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F3',$data_pass);
            return $pdf->download('Kontrak Pengujian.pdf');
        }

        //user penyelia
        if($user == 4){
            $pdf = Pdf::loadView('pages.pdf_template.Form_7F6',$data_pass);
            return $pdf->download('Kesimpulan Diagnosa.pdf');
        }
    }

    public function invoice($id){
        $user = Auth::user()->id;
        $user_data = User::where('id',$user)->get();
        $permohonan = Permohonan::with('jenis_sampel')->where('id',$id)->first();
        $jenis = Jenis_sampel::where('permohonan_id', $permohonan->id)->get();
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
            $pdf = Pdf::loadView('pages.pdf_template.invoice',$data_pass);
            return $pdf->download('Invoice.pdf');
    }
    public function sertifikat($id){
        $user = Auth::user()->id;
        $user_data = User::where('id',$user)->get();
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
            return $pdf->download('Sertifikat.pdf');
    }
}