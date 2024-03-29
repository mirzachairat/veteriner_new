<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\Jenis_harga;
use Illuminate\Support\Facades\Session;
use App\Models\Dokumen;
use App\Models\Jenis_sampel;
use App\Models\Progres;
use App\Models\Workflow;
use App\Models\Tagihan;
use App\Models\Invoice;
use App\Models\Filedokumen;
use Illuminate\Support\Facades\Auth;


class PengirimController extends Controller
{
    public function index()
    {
        $id=[];
        $data=[];
        
        $data = Permohonan::with('progres')
        ->with('jenis_sampel')
        ->with('user')
        ->where('users_id', auth()->id())->get();

        return view('pages.pengirim.pengirim', compact('data'));
    //     if($data != ''){
    //        $data = Permohonan::where('users_id', auth()->id())->get();
    //        foreach($data as $item_data){
    //            $id = $item_data->id;
    //        }
    //        $data_work = Progres::with('workflow')->where('permohonan_id',$id)->get();
    //        return view('pages.pengirim.pengirim', compact('data','data_work'));
    //     }else{
    //        return view('pages.pengirim.pengirim', compact('data', 'data_work'));
    //    }
        
    }

    public function billing($id){
        $data = Jenis_sampel::with('permohonan')->where('permohonan_id', $id)->get();
        $users = Permohonan::with('user')->with('progres')->where('id', $id)->get();
        $data_tagihan = Tagihan::where('permohonan_id',$id)->get();
        return view('pages.pengirim.billing', compact(['data','users','data_tagihan']));
    }

    public function file_upload(Request $request, $id){
       
        $validator =  $request->validate([
            'image' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Custom validation rule for image type
                    $allowedTypes = ['jpeg', 'png', 'jpg', 'gif'];
                    $extension = pathinfo($value->getClientOriginalName(), PATHINFO_EXTENSION);

                    if (!in_array($extension, $allowedTypes)) {
                        $fail("$attribute harus bertype: " . implode(', ', $allowedTypes));
                    }
                },
                'max:2048', // Adjust the allowed file size as needed
            ],
        ]);

        // If validation passes, continue with your logic to handle the uploaded image
        // For example, storing the image in the storage or public directory
        $imagePath = $request->file('image')->store('post-images');
        // $request->image->move(public_path('images'), $imagePath);
        
            //1 invoice 
            Tagihan::where('permohonan_id', $id)->update([
                'payment_link' => $request->file('image')->store('post-images'),
                'payment_status' => 1,
                'amount' => 1,
                'doc_no' => 1
            ]);    

        // Your additional logic...

        return Redirect()->back();
    }

    public function form_permohonan()
    {
        $data_harga = Jenis_harga::get();
        return view('pages.pengirim.form_pengirim', compact('data_harga'));
    }

    public function download_file($id){
        $permohonan = Permohonan::where('users_id',auth()->id())->where('id',$id)->first();
        $data_pass = [
            'nama_pemohon' => $permohonan->nama_pemohon,
            'alamat' => $permohonan->alamat,
            'instansi' => $permohonan->instansi,
            'jenis_hewan' => $permohonan->jenis_hewan
        ];
        $pdf = Pdf::loadView('pages.pdf_template.Form_7F1', $data_pass);
        return $pdf->download('Permohonan.pdf');
    }
}