<?php

namespace App\Http\Controllers;

use App\Models\srt_berpenghasilan;
use Illuminate\Http\Request;

class srt_berpenghasilanController extends Controller
{
    // public function store(Request $request)
    // {
        // $this->validate($request, [
        //     'fc_ktp' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
        //     'fc_kk' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
        //     'fc_srtPernyataan' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
        //     'fc_tandalunasPbb' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048'

        // ]);

        // if ($request->hasFile('fc_ktp') && $request->hasFile('fc_kk') && $request->hasFile('fc_srtPernyataan') && $request->hasFile('fc_tandalunasPbb')) {
        //     # code...
        //     $fc_ktp = $request->file('fc_ktp')->storeAs('surat_berpenghasilan', 'fc_ktp'.uniqid().'.'.$request->file('fc_ktp')->extension());
        //     $fc_kk = $request->file('fc_kk')->storeAs('surat_berpenghasilan', 'fc_kk'.uniqid().'.'.$request->file('fc_kk')->extension());
        //     $fc_srtPernyataan = $request->file('fc_srtPernyataan')->storeAs('surat_berpenghasilan', 'fc_srtPernyataan'.uniqid().'.'.$request->file('fc_srtPernyataan')->extension());
        //     $fc_tandalunasPbb = $request->file('fc_tandalunasPbb')->storeAs('surat_berpenghasilan', 'fc_tandalunasPbb'.uniqid().'.'.$request->file('fc_tandalunasPbb')->extension());
        // }

        // $data = new srt_berpenghasilan;

        // $data->fc_ktp = $fc_ktp;
        // $data->fc_kk = $fc_kk;
        // $data->srt_pernyataan = $fc_srtPernyataan;
        // $data->fc_tanda_lunas_pbb = $fc_tandalunasPbb;

        // $data->save();

        // return redirect()->route('home');
    // }
}
