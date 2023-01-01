<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barista extends Model
{
    use HasFactory;
    protected $table = "barista";

    // public function user(){
    //     return $this->belongsTo(User::class, "user_id");
    // }

    // public function kategori(){
    //     return $this->hasOne(Minuman::class, "user_minuman");
    // }

    // public function minuman(){
    //     return $this->hasMany(Cetak::class, "user_kategori");
    // }

    // public function kategori(){
    //     return $this->belongsToMany(Kategori::class, "kategori_berita", "berita_id", "kategori_id");
    // }

    // public function berita(){
    //     return $this->belongsToMany(Berita::class, "kategori_berita", "berita_id", "kategori_id");
    // }

    

    public function minuman(){
        return $this->hasMany(Minuman::class, "barista_id");
    }
}
