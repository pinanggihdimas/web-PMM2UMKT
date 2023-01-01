<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;
    protected $table = "minuman";

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, "nama_kategori", "id_kategori", "minuman_id");
    }
}
