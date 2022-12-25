<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikTanah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "pemilik_tanah";

    public function tanah()
    {
        return $this->hasMany(Tanah::class);
    }

}
