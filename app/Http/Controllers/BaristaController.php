<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barista;

class BaristaController extends Controller
{
    public function buat()
    {
        return view("barista.form-input");
    }

    public function simpan(Request $request)
    {
        $barista = new barista();
        $barista->nama_barista = $request->get("nama_barista");
        $barista->jenis_kelamin = $request->get("jenis_kelamin");
        $barista->notlp = $request->get("notlp");
        $barista->email = $request->get("email");
        $barista->save();

        return redirect(route("tampil_barista", ['id' => $barista->id]));
    }

    public function tampil($id)
    {
        $barista = barista::find($id);

        return view("barista.tampil")->with("barista", $barista);
    }

    public function semua()
    {
        $data = barista::all();
        return view("barista.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("barista.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $barista = barista::find($id);
        $barista->nama_barista = $request->get("nama_barista");
        $barista->jenis_kelamin = $request->get("jenis_kelamin");
        $barista->notlp = $request->get("notlp");
        $barista->email = $request->get("email");
        $barista->save();

        return redirect(route("tampil_barista", ['id' => $barista->id]));
    }

    public function hapus($id)
    {
        barista::destroy($id);
        return redirect(route('semua_barista'));
    }
}