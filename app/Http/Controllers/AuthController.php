<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth', ['except' => ['login', 'register']]);
    // }

    public function loginAction(Request $request){
        // dd($request->all());    

        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) return sendError('Validation Error.', $validator->errors(), 422);
        $credentials = $request->only('email', 'password');
        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user()->jabatan_id;
            if ($user == '1') {
                return redirect()->route('pengirim');
            }
            if ($user == '2') {
                return redirect()->route('penerima');
            }
            if ($user == '3') {
                return redirect()->route('manager');
            }
            if ($user == '4') {
                return redirect()->route('penyelia');
            }
            if ($user == '5') {
                return redirect()->route('penguji');
            }
            if ($user == '6') {
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
