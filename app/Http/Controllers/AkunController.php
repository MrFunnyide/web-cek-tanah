<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        return view('Akun.index', [
            'accounts' => User::get(),
        ]);
    }

}
