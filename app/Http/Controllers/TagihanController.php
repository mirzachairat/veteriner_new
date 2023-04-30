<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class TagihanController extends Controller
{
    public function index()
    {
        $data = Tagihan::all();
        return view('pages.tagihan.tagihan', compact('data'));
    }

    public function store(Request $request)
    {
        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);
        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => '1000000'
        ]);
        $response = $data_request->object();
        dd($response);
        // Tagihan::create([
        //     'doc_no' => $external_id,
        //     'amount' => request('amount'),
        //     'description' => request('description'),
        //     'payment_status' => $response->status,
        //     'payment_link' => $response->invoice_url
        // ]);
    }
    public function callback_pay(){
        
    }
}
