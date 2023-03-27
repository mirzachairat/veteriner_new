<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PengirimController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Jenis_hargaController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PenyeliaController;
use App\Http\Controllers\PengujiController;
use App\Http\Controllers\MapviewController;
use App\Http\Controllers\BendaharaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create_user']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout']);

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
 
    //Module Route Pengirim
    Route::get('/pengirim', [PengirimController::class, 'index']);
    Route::get('/form', [PengirimController::class, 'form_permohonan']);
    Route::get('/view/billing', [PengirimController::class, 'billing'])->name('billing');
    Route::get('/view/pengirim/{id}', [DashboardController::class, 'detail']);
    Route::post('/upload/invoice/{id}', [PengirimController::class, 'invoice_upload']);
    // Module Permohononan
    Route::post('/permohonan', [PermohonanController::class, 'tambah']);

    //Module Penerima 
    Route::get('/penerima', [PenerimaController::class, 'index'])->name('penerima');
    Route::get('/form/penerima/{id}', [PenerimaController::class, 'form_detail']);
    Route::get('/cetak/penerima', [PenerimaController::class, 'view_allform']);
    Route::post('/penerima/update', [PenerimaController::class, 'update_jenis_sampel']);
    Route::get('/view/penerima/{id}', [DashboardController::class, 'detail']);

    //Mudulw Manager
    Route::get('/manager', [ManagerController::class, 'index']);
    Route::get('/form/manager/{id}', [ManagerController::class, 'form_detail']);
    Route::get('/cetak/manager', [ManagerController::class, 'view_allform']);
    Route::post('/manager/update', [ManagerController::class, 'update_jenis_sampel']);
    Route::get('/view/manager/{id}', [DashboardController::class, 'detail']);

    //Module Penyelia
    Route::get('/penyelia', [PenyeliaController::class, 'index']);
    Route::get('/form/penyelia/{id}', [PenyeliaController::class, 'form_detail']);
    Route::get('/cetak/penyelia', [PenyeliaController::class, 'view_allform']);
    Route::post('/penyelia/update', [PenyeliaController::class, 'update_jenis_sampel']);
    Route::get('/view/penyelia/{id}', [DashboardController::class, 'detail']);
    
    //Module Penguji
    Route::get('/penguji', [PengujiController::class, 'index']);
    Route::get('/form/penguji/{id}', [PengujiController::class, 'form_detail']);
    Route::get('/cetak/penguji', [PengujiController::class, 'view_allform']);
    Route::post('/penguji/update', [PengujiController::class, 'update_jenis_sampel']);
    Route::get('/view/penguji/{id}', [DashboardController::class, 'detail']);
    

    // Getdata harga
    Route::get('/harga', [Jenis_hargaController::class, 'index'])->name('pageharga');
    Route::get('/daftar_harga/select', [Jenis_hargaController::class, 'getHarga']);
    Route::post('/tambah/harga', [Jenis_hargaController::class, 'tambahharga']);

    //panggil from ketika ingin menambahkan data jenis harga   
    Route::get('/view/form/', [Jenis_hargaController::class, 'viewform']);

    //panggil from ketika ingin edit form
    Route::get('/view/form/{id}', [Jenis_hargaController::class, 'vieweditform']);
    Route::get('/harga/delete/{id}', [Jenis_hargaController::class, 'deleteharga']);
    Route::post('/harga/update', [Jenis_hargaController::class, 'updateharga']);
    
    //Dokumen route
    Route::get('/download/form/{id}',[DokumenController::class, 'filepdf']);
    Route::get('/download/invoice/{id}',[DokumenController::class, 'invoice']);
    Route::get('/download/sertifikat/{id}',[DokumenController::class, 'sertifikat']);
    Route::get('/dokumen/{form_f6}', 'DokumenController@index');
    
    //Dokumen Bendahara
    Route::get('/bendahara', [BendaharaController::class , 'index']);

    // Map route
    Route::get('/mapview', [MapviewController::class, 'mapview']);
    Route::get('/mapview/titik', [MapviewController::class, 'json_titik']);
    
    
    //tambah user
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user', [UserController::class, 'view_user']);
    Route::get('/user/tambah', [UserController::class, 'create_user']);
    Route::get('/user/edit/{id}', [UserController::class, 'edituser']);
    Route::get('/user/delete/{id}', [UserController::class, 'edituser']); 
});