<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "tanah";

    public function pemilik_tanah()
    {
        return $this->belongsTo(PemilikTanah::class);
    }
}
