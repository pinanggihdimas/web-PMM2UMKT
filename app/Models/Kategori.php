<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function minuman()
    {
        return $this->belongsToMany(Minuman::class, "nama_kategori", "id_kategori", "minuman_id");
    }
}
