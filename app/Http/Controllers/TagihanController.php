<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Permohonan;

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
}
