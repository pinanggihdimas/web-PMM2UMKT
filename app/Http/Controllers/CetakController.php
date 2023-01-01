<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cetak;

class CetakController extends Controller
{
    public function buat()
    {
        return view("cetak.form-input");
    }

    public function simpan(Request $request)
    {
        $cetak = new cetak();
        $cetak->tanggal = $request->get("tanggal");
        $cetak->minuman = $request->get("minuman");
        $cetak->nama = $request->get("nama");
        $cetak->qty = $request->get("qty");
        $cetak->save();

        return redirect(route("tampil_cetak", ['id' => $cetak->id]));
    }

    public function tampil($id)
    {
        $cetak = cetak::find($id);

        return view("cetak.tampil")->with("cetak", $cetak);
    }

    public function semua()
    {
        $data = cetak::all();
        return view("cetak.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("cetak.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $cetak = cetak::find($id);
        $cetak->tanggal = $request->get("tanggal");
        $cetak->minuman = $request->get("minuman");
        $cetak->nama = $request->get("nama");
        $cetak->qty = $request->get("qty");
        $cetak->save();

        return redirect(route("tampil_cetak", ['id' => $cetak->id]));
    }

    public function hapus($id)
    {
        cetak::destroy($id);
        return redirect(route('semua_cetak'));
    }
}