<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{

     public function index(){
          $datapet = Pet::all();
          return response()->json([
               $message = 'Semua data hewan',
               $status = true,
               $data = $datapet
          ]) ;   
     }

    public function tambah_pet(){

        $message = '';
        $status = false;
        $data_pet = '';

       $data_pet = Pet::create([
            'id_user' => $request->id_user,
            'nama_pet' => $request->nama_pet,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'berat' => $request->berat,
            'spesies' => $request->spesies,
            'ras' => $request->ras,
            'warna' => $request->warna,
            'vaksin' => $request->vaksin
       ]); 
       return response()->json([
            $message = 'Pet berhasil di tambahkan',
            $status = true,
            $data = $data_pet
       ]) ;   
    }
}
