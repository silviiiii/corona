<?php

namespace App\Models;
use App\Models\Desa;
use App\Models\Kasus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    public function Desa () {
        return $this->belongsTo('App\Models\Desa','id_desa');
    }
    public function Kasus () {
        return $this->hasMany('App\Models\Kasus','id_rw');
    }
    use HasFactory;
}
