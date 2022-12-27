<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "pemohon";

    public function srt_berpenghasilan()
    {
        return $this->hasMany(srt_berpenghasilan::class);
    }

    public function srt_ket_pindah_wilayah()
    {
        return $this->hasMany(srt_ketPindahWilayah::class);
    }
}
