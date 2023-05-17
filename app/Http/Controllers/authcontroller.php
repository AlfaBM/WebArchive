<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class authcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function autentikasi(Request $request)
    {
        $admin = admin::where('username', '=', $request->input('username'))->first();
        if ($admin) {
            if (Hash::check($request->input('password'), $admin->password)) {
                // if ($request->input('password') == $admin->password){
                session()->put('admin', 'True');
                session()->put('idadmin', $admin->id);
                return redirect('/admin');
            } else {
                session()->flash('failed', 'Password salah');
                return redirect('/login');
            }
        } else {
            session()->flash('failed', 'Username Tidak ada');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::flush();

        return redirect('/login');

    }
}