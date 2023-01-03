<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\srt_berpenghasilan;
use Illuminate\Http\Request;

class srt_berpenghasilanController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
            'fc_ktp' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
            'fc_kk' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',
            'srt_pernyataan' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048',

            'fc_tandalunasPbb' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048'

        ]);

        $fc_kk = null;
        $fc_ktp = null;
        $srt_pernyataan = null;
        $fc_tandalunasPbb = null;

        if ($request->hasFile('fc_ktp')) {
            $fc_ktp = $request->file('fc_ktp')->storeAs('fc_ktp', 'fc_ktp'.uniqid().'.'.$request->file('fc_ktp')->extension());
        }
        if ($request->hasFile('fc_kk')) {
            $fc_kk = $request->file('fc_kk')->storeAs('fc_kk', 'fc_kk'.uniqid().'.'.$request->file('fc_kk')->extension());
        }
        if ($request->hasFile('srt_pernyataan')) {
            $srt_pernyataan = $request->file('srt_pernyataan')->storeAs('srt_pernyataan', 'srt_pernyataan'.uniqid().'.'.$request->file('srt_pernyataan')->extension());
        }
        if ($request->hasFile('fc_tandalunasPbb')) {
            $fc_tandalunasPbb = $request->file('fc_tandalunasPbb')->storeAs('fc_tandalunasPbb', 'fc_tandalunasPbb'.uniqid().'.'.$request->file('fc_tandalunasPbb')->extension());
        }

        $pemohon = new Pemohon();

        $pemohon->name = $request->name;
        $pemohon->pekerjaan = $request->pekerjaan;
        $pemohon->alamat = $request->alamat;
        $pemohon->no_telp = $request->no_telp;
        $pemohon->jenis_kelamin = $request->jenis_kelamin;

        $pemohon->save();
        $data = new srt_berpenghasilan();

        $data->fc_ktp = $fc_ktp;
        $data->fc_kk = $fc_kk;
        $data->srt_pernyataan = $srt_pernyataan;
        $data->fc_tanda_lunas_pbb = $fc_tandalunasPbb;
        $data->status = 'diterima';
        $data->pemohon_id = $pemohon->id;

        $data->save();

        session()->flash('success', 'pengajuan berhasil, ini id anda ' . ' ' . $pemohon->id);

        return redirect()->intended('/');
    }

    public function indexHomeWarga()
    {
        $data = Pemohon::all();
        return view('warga.home', compact('dataWarga'));
    }

    public function index()
    {
        $data = srt_berpenghasilan::all();
        return view('surat.index', compact('data'));
    }

    public function show($id)
    {
        $detailData = srt_berpenghasilan::findOrFail($id);
        return view('surat.cek', compact('detailData'));
    }

    public function edit($id)
    {
        $detailData = srt_berpenghasilan::findOrFail($id);
        return view('surat.edit', compact('detailData'));
    }

    public function editStts(Request $request, $id)
    {
        $data = srt_berpenghasilan::findOrFail($id);
        $data->status = $request->status;
        $data->save();
        return redirect()->route('surat.index');
    }

    public function destroy($id)
    {
        $data = srt_berpenghasilan::findOrFail($id);
        $pemohon = Pemohon::findOrFail($data->pemohon_id);
        $data->delete();
        $pemohon->delete();
        return redirect()->route('surat.index');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $pemohon = Pemohon::where('id', 'like', '%'.$request->search.'%')->get();
        } else {
            $pemohon = Pemohon::all();
        }

        return view('warga.home', compact('pemohon'));
    }

}
