<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\srt_ketPindahWilayah;
use Illuminate\Http\Request;

class srt_ketPindahWilayahController extends Controller
{
    public function show($id)
    {
        $detailData = srt_ketPindahWilayah::findOrFail($id);
        return view('surat.cekPw', compact('detailData'));
    }
    public function destroy($id)
    {
        $data = srt_ketPindahWilayah::findOrFail($id);
        $pemohon = Pemohon::findOrFail($data->pemohon_id);
        $data->delete();
        $pemohon->delete();
        return redirect()->route('suratPw.index');
    }
    public function edit($id)
    {
        $detailData = srt_ketPindahWilayah::findOrFail($id);
        return view('surat.editPw', compact('detailData'));
    }
    public function editStts(Request $request, $id)
    {
        $data = srt_ketPindahWilayah::findOrFail($id);
        $data->status = $request->status;
        $data->save();
        return redirect()->route('suratPw.index');
    }
    public function index()
    {
        $data = srt_ketPindahWilayah::all();
        return view('surat.indexPW', compact('data'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
            'Spengantar' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
            'FcSDasatTanah' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
            'fc_ktp' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
        ]);

        $Spengantar = null;
        $FcSDasarTanah = null;
        $fc_ktp = null;

        if ($request->hasFile('Spengantar')) {
            $Spengantar = $request->file('Spengantar')->storeAs('Spengantar', 'Spengantar'.uniqid().'.'.$request->file('Spengantar')->extension());
        }

        if ($request->hasFile('FcSDasatTanah')) {
            $FcSDasarTanah = $request->file('FcSDasatTanah')->storeAs('FcSDasatTanah', 'FcSDasatTanah'.uniqid().'.'.$request->file('FcSDasatTanah')->extension());
        }

        if ($request->hasFile('fc_ktp')) {
            $fc_ktp = $request->file('fc_ktp')->storeAs('fc_ktp', 'fc_ktp'.uniqid().'.'.$request->file('fc_ktp')->extension());
        }

        $data = new srt_ketPindahWilayah();
        $pemohon = new Pemohon();

        $pemohon->name = $request->name;
        $pemohon->pekerjaan = $request->pekerjaan;
        $pemohon->alamat = $request->alamat;
        $pemohon->no_telp = $request->no_telp;
        $pemohon->jenis_kelamin = $request->jenis_kelamin;
        $pemohon->save();


        $data->srt_pengantar = $Spengantar;
        $data->srt_dasar_tanah = $FcSDasarTanah;
        $data->fc_ktp = $fc_ktp;
        $data->status = 'diterima';
        $data->pemohon_id = $pemohon->id;
        $data->save();

        return redirect()->route('home');

    }
}
