<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Permohonan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Jenis_sampel;
use Barryvdh\DomPDF\Facade\Pdf;

class TagihanController extends Controller
{
    public function index()
    {
        $data = Tagihan::all();
        return view('pages.tagihan.tagihan', compact('data'));
    }

    public function store($id)
    {
        $data_permohonan =  Permohonan::where('id', $id)->get();
        foreach($data_permohonan as $item){
            $id = $item->id;
            $jumlah =  $item->jumlah;
        }
        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => $jumlah
        ]);
        $response = $data_request->object();
        Tagihan::create([
            'doc_no' => $external_id,
            'permohonan_id' => $id,
            'amount' => $response->amount,
            'payment_status' => $response->status,
            'payment_link' => $response->invoice_url
        ]);

        return redirect()->to($response->invoice_url);
    }

    public function callback_pay(Request $request){
        $data = request()->all();
        $status = $data['status'];
        $external_id = $data['external_id'];
        Tagihan::where('doc_no', $external_id)->update([
            'payment_status' => $status
        ]);
        return response()->json($data);
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
                'jenis' => $jenis,
                'user' => $user_data
                // 'jenis_sampel' => $jenis->jenis_sampel,
                // 'jumlah_contoh' => $jenis->jumlah_contoh,
                // 'bahan_pengawet' => $jenis->bahan_pengawet,
                // 'kondisi' => $jenis->kondisi,
                // 'kriteria' => $jenis->kriteria, 
                // 'jenis_pengujian' => $jenis->jenis_pengujian,
                // 'total_harga' => $jenis->total_harga,
        ];
            $pdf = Pdf::loadView('pages.pdf_template.invoice',$data_pass);
            return $pdf->stream('Invoice.pdf');
    }

    //penerima / bendahara memvalidasi invoice yg dikirim upload file dari pemohon atau pengirim sampel
    public function cek_invoice($id){
        $data_file =  Tagihan::where('permohonan_id',$id)->get();
        return view('pages.pdf_template.view_invoice', compact('data_file'));    
    }
}
