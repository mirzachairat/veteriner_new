<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobile\Jadwal;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function tambahjadwal(Request $request){
        // $id_user = Auth::user();
        $date_request = $request->tanggal; //2023-08-09 
        if($date_request){
            $tgl_format = date_format('Y-m-d', $date_request);
        }
        dd($tgl_format);
        $time_request =  $request->waktu;
        // dd($date_request,$time_request);
        // periksa waktu dan tanggal
        $jadwal = '';
        $status = false;
        $message = '';
        $data = '';
        $validate_jadwal = Jadwal::where('tanggal', $date_request)->where('waktu',$time_request)->first();
        // dd($validate_jadwal);
        if($validate_jadwal !== null){
            $status = false;
            $message = 'sudah di booking, silahkan pilih waktu yg berbeda';
            $data = '';
            
        }else{    
            $jadwal = Jadwal::create([
                'id_user' => $request->id_user,
                'tanggal' => $date_request,
                'waktu' => $request->waktu,
                'antrian' => $request->antrian,
                'nama_pet' => $request->nama_pet,
                'kondisi_pet' => $request->kondisi_pet
            ]);
            $status = true;
            $message  = "Jadwal berhasil di buat.";
            $data = $jadwal;
        }

        return response()->json([
            "success" => $status,
            "message" => $message,
            "data" => $data
        ]);
    }
}
