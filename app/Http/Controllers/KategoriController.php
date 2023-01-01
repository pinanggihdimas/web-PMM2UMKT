<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function buat()
    {
        return view("kategori.form-input");
    }

    public function simpan(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama_kategori = $request->get("nama_kategori");
        $kategori->minuman_id = $request->get("minuman_id");
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

    public function tampil($id)
    {
        $kategori = kategori::find($id);

        return view("kategori.tampil")->with("kategori", $kategori);
    }

    public function semua()
    {
        $data = kategori::all();
        return view("kategori.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("kategori.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id);
        $kategori->nama_kategori = $request->get("nama_kategori");
        $kategori->minuman_id = $request->get("minuman_id");
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

    public function hapus($id)
    {
        kategori::destroy($id);
        return redirect(route('semua_kategori'));
    }
}