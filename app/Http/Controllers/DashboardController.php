<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\srt_berpenghasilan;
use App\Models\srt_ketPindahWilayah;
use App\Models\Tanah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataArsip = Arsip::count();
        $dataTanah = Tanah::count();
        $dataSrt_berpenghasilan = srt_berpenghasilan::count();
        $dataSrt_pindahWilayah = srt_ketPindahWilayah::count();

        $jumlahSrt = $dataSrt_berpenghasilan + $dataSrt_pindahWilayah;
        return view('dashboard.index', [
            'jumlahTanah' => $dataTanah,
            'jumlahArsip' => $dataArsip,
            'jumlahSrt' => $jumlahSrt
        ]);
    }

    public function indexLurah()
    {
        return view('lurah.dashboardLurah.dashboardLurah');
    }
}
