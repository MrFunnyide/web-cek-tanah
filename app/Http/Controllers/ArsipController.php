<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        return view('arsip.index', [
            'arsip' => Arsip::all()
        ]);
    }

    public function create()
    {
        return view('arsip.create');
    }
}
