<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function loginAction(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             
            if (auth()->user()->jabatan_id == '1') {
                return redirect()->route('pengirim');
            }
            if (auth()->user()->jabatan_id == '2') {
                return redirect()->route('penerima');
            }
            if (auth()->user()->jabatan_id == '3') {
                return redirect()->route('manager');
            }
            if (auth()->user()->jabatan_id == '4') {
                return redirect()->route('penyelia');
            }
            if (auth()->user()->jabatan_id == '5') {
                return redirect()->route('penguji');
            }
            if (auth()->user()->jabatan_id == '6') {
                return redirect()->route('bendahara');
            }
            return redirect(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'message' => 'email atau password salah',
        ])->onlyInput('message');
    }
    
    public function logout (Request $request){
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
