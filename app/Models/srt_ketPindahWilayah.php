<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class srt_ketPindahWilayah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = "srt_ket_pindah_wilayah";

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class);
    }
}
