<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_berkas' => 'required',
            'keterangan' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg,pdf,docx,doc|max:2048'
        ]);

        $file = null;

        if($request->hasFile('file')){
            $file = $request->file('file')->storeAs('arsip', 'arsip'.uniqid().'.'.$request->file('file')->extension());
        }

        $arsip = new Arsip;

        $arsip->name_berkas = $request->name_berkas;
        $arsip->deskripsi_arsip = $request->keterangan;
        $arsip->file_arsip = $file;

        $arsip->save();

        return redirect()->route('arsip.index');
    }

    public function edit($id)
    {
        $dt = Arsip::findorFail($id);
        return view('arsip.edit', compact('dt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Arsip::findorFail($id);
        $ubah->name_berkas = $request->name_berkas;
        $ubah->deskripsi_arsip = $request->keterangan;

        if ($request->hasFile('file'))
        {
            # code...
            $destination = public_path('/storage/').$ubah->file_arsip;
            if (File::exists($destination)) {
                # code...
                @unlink($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/', $filename);
            $ubah->file_arsip = $filename;
        }

        $ubah->save();
        return redirect()->route('arsip.index')->with('success', 'Data berhasil diubah');
    }

    public function delete_arsip($id)
    {
        $delete = Arsip::findorfail($id);

        $file = public_path('/storage/').$delete->file_arsip;
        // cek file jika ada gambar
        if(file_exists($file)){
            // hapus gambar di file storage
            @unlink($file);
        }

        // hapus data di database
        $delete->delete();
        return back();
    }
}
