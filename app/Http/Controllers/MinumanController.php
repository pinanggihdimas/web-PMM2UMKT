<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Minuman;

class MinumanController extends Controller
{
    public function buat()
    {
        // return view("minuman.form-input");
        $kategori = Kategori::all();
        return view("minuman.form-input")->with("kategori", $kategori);
    }

    public function simpan(Request $request)
    {
        $minuman = new minuman();
        $minuman->nama = $request->get("nama");
        $minuman->gambar = $request->get("gambar");
        $minuman->deskripsi = $request->get("deskripsi");
        $minuman->harga = $request->get("harga");
        $minuman->id_kategori = $request->get("id_kategori");
        $minuman->nama_kategori = $request->get("nama_kategori");
        
        $minuman->save();

        // $minuman->kategori()->sync($request->get("kategori")); // simpan relasi many to many     
        return redirect(route("tampil_minuman", ['id' => $minuman->id]));
    }

    public function tampil($id)
    {
        $minuman = minuman::find($id);

        return view("minuman.tampil")->with("minuman", $minuman);
    }

    public function semua()
    {
        $data = minuman::all();
        return view("minuman.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("minuman.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $minuman = minuman::find($id);
        $minuman->nama = $request->get("nama");
        $minuman->gambar = $request->get("gambar");
        $minuman->deskripsi = $request->get("deskripsi");
        $minuman->harga = $request->get("harga");
        $minuman->id_kategori = $request->get("id_kategori");
        $minuman->nama_kategori = $request->get("nama_kategori");
        $minuman->save();

        return redirect(route("tampil_minuman", ['id' => $minuman->id]));
    }

    public function hapus($id)
    {
        minuman::destroy($id);
        return redirect(route('semua_minuman'));
    }
}