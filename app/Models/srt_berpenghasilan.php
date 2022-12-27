<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class srt_berpenghasilan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = "srt_berpenghasilan";

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class);
    }
}
