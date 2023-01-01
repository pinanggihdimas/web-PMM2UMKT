<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;
    protected $table = "cetak";

    public function user(){
        return $this->belongsTo(User::class, "nama");
    }

    public function minuman(){
        return $this->hasMany(Minuman::class, "minuman");
    }
}
