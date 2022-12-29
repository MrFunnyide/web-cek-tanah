<?php

namespace App\Http\Controllers;

use App\Models\PemilikTanah;
use App\Models\Tanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanahController extends Controller
{
    // method store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'SHM' => 'required',
            'luas_tanah' => 'required',
            'alamat_tanah' => 'required',
            'batasan_utara' => 'required',
            'batasan_timur' => 'required',
            'batasan_selatan' => 'required',
            'batasan_barat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'

        ]);

        $dataTanah = new Tanah();
        $dataPemilik = new PemilikTanah();

        $dataPemilik->name = $request->name;
        $dataPemilik->pekerjaan = $request->pekerjaan;
        $dataPemilik->umur = $request->umur;
        $dataPemilik->agama = $request->agama;
        $dataPemilik->alamat = $request->alamat;

        $dataPemilik->save();

        $dataTanah->SHM = $request->SHM;
        $dataTanah->luas_tanah = $request->luas_tanah;
        $dataTanah->alamat_tanah = $request->alamat_tanah;
        $dataTanah->batasan_utara = $request->batasan_utara;
        $dataTanah->batasan_timur = $request->batasan_timur;
        $dataTanah->batasan_selatan = $request->batasan_selatan;
        $dataTanah->batasan_barat = $request->batasan_barat;
        $dataTanah->latitude = $request->latitude;
        $dataTanah->longitude = $request->longitude;
        $dataTanah->pemilik_tanah_id = $dataPemilik->id;


        $dataTanah->save();

        session()->flash('success', 'Data berhasil ditambahkan!');

        return redirect()->route('dataTanah.pemilik');
    }
    // method update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'SHM' => 'required',
            'luas_tanah' => 'required',
            'alamat_tanah' => 'required',
            'batasan_utara' => 'required',
            'batasan_timur' => 'required',
            'batasan_selatan' => 'required',
            'batasan_barat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'

        ]);
        $dataPemilik = PemilikTanah::findOrFail($id);
        $dataPemilik->name = $request->name;
        $dataPemilik->pekerjaan = $request->pekerjaan;
        $dataPemilik->umur = $request->umur;
        $dataPemilik->agama = $request->agama;
        $dataPemilik->alamat = $request->alamat;
        if ($dataPemilik->save()) {
            # code...
            $dataTanah = Tanah::findOrFail($id);
            $dataTanah->SHM = $request->SHM;
            $dataTanah->luas_tanah = $request->luas_tanah;
            $dataTanah->alamat_tanah = $request->alamat_tanah;
            $dataTanah->batasan_utara = $request->batasan_utara;
            $dataTanah->batasan_timur = $request->batasan_timur;
            $dataTanah->batasan_selatan = $request->batasan_selatan;
            $dataTanah->batasan_barat = $request->batasan_barat;
            $dataTanah->latitude = $request->latitude;
            $dataTanah->longitude = $request->longitude;
            $dataTanah->pemilik_tanah_id = $dataPemilik->id;
        }
        $dataTanah->save();

        session()->flash('info', 'Data berhasil diperbaharui');

        return redirect()->route('dataTanah.pemilik');
    }

    // method delete
    public function destroy($id)
    {
        $dataPemilik = PemilikTanah::findOrFail($id);
        $dataTanah = Tanah::findOrFail($id);
        $dataTanah->delete();
        $dataPemilik->delete();

        session()->flash('danger', 'Data berhasil dihapus');

        return redirect()->route('dataTanah.pemilik');
    }

    // method pemilik
    public function pemilik()
    {
        $pemilik = PemilikTanah::all();
        return view('dataTanah.index', ['pemilik' => $pemilik]);

    }
}
