<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobile\Jadwal;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function tambahjadwal(Request $request){;
        $data = Jadwal::get('id');

        if($data == ""){
            $input_data = $request->all();
            $jadwal = Jadwal::create([
                'id_user' => $request->id_user,
                'tanggal' => $date_request,
                'waktu' => $request->waktu,
                'antrian' => $request->antrian,
                'nama_pet' => $request->nama_pet,
                'kondisi_pet' => $request->kondisi_pet
            ]);
        }

        // $id_user = Auth::user();
        $date_request = $request->tanggal;
        $time_request =  $request->waktu;
        // periksa waktu dan tanggal 
        $validate_jadwal = Jadwal::where('tanggal', $date_request)->where('waktu',$time_request)->get('waktu');

        if($validate_jadwal != ""){
            return response()->json([
                "message" => 'sudah di booking, silahkan pilih waktu yg berbeda',
                "error" => 404
            ]);
        }else{
            $jadwal = Jadwal::create([
                'id_user' => $request->id_user,
                'tanggal' => $date_request,
                'waktu' => $request->waktu,
                'antrian' => $request->antrian,
                'nama_pet' => $request->nama_pet,
                'kondisi_pet' => $request->kondisi_pet
            ]);
        }
        
        return response()->json([
            "success" => true,
            "message" => "Jadwal berhasil di buat.",
            "data" => $jadwal
            ]);
    }
}
