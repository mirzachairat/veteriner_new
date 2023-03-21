<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Providers\RouteServiceProvider;


class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function view_user(){
        $data = User::get();
        return view('pages.users.user')->with([
            'data' => $data
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'message' => 'email atau password salah',
        ])->onlyInput('message');
    }
    public function create_user(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => ['required','unique:users','email'],
            'password' => 'required'
        ]);

        $user = User::create([
            'nama' => trim($request->nama),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'jabatan' => $request->jabatan,
            'type' => $request->type,
            'jabatan_id' => 1,
            'instansi' => $request->instansi,
            'alamat' => $request->alamat,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }
}