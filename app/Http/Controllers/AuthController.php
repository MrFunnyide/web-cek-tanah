<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]);

            $kredensial = $request->only('username', 'password');
            if (Auth::attempt($kredensial)) {
                # code...
                $user = Auth::user();
                if($user->jabatan == 'staff') {
                    return redirect()->intended('dashboard');
                } elseif($user->jabatan == 'lurah') {
                    return redirect()->intended('dashboardLurah');
                }
                return redirect()->intended('login');
            }
            return redirect('login');
        }

        public function logout(Request $request)
        {
            $request->session()->flush();
            Auth::logout();
            return redirect('login');
        }
    }
