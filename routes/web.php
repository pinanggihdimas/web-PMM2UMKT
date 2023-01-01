<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\BaristaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\MinumanController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hii/panggilan/{nama}", [ContohController::class, "hii"])->name("hii");

Route::get('/dimas', function() {
    echo "Pinanggih";
});

Route::get('/pinanggih', function () {
    return view('pinanggih');
})->name("home");

Route::get('/dimas', function () {
    return view('dimas');
})->name("about");

Route::get('/permana', function () {
    return view('permana');
})->name("contact");

Route::get('/my-education', function () {
    return view('education');
})->name("pendidikan");

Route::get('/my-course', function () {
    return view('course');
})->name("kursus");

Route::get("/tampil-user",[UserController::class,"tampil"])->name("user_all");;
Route::get("/input-user",[UserController::class,"formInput"])->name("user_input");;
Route::post("/simpan-user",[UserController::class,"simpan"])->name("user_simpan");;

Route::get("/edit-user/{id}",[UserController::class,"formEdit"])->name("user_edit");;
Route::put("/update-user/{id}",[UserController::class,"update"])->name("user_update");;
Route::delete("/hapus-user/{id}",[UserController::class,"hapus"])->name("user_hapus");;

Route::get("/tampil-user/{id}",[UserController::class,"show"])->name("user_show");;
Route::get("/login-user", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function() {
    Route::get("/tampil-user", 
   [UserController::class, "tampil"])->name("user_all");
   });


   Route::middleware("auth")->group(function() {
    Route::get("barista/buat", [BaristaController::class, 'buat'])->name("buat_barista");
    Route::post("barista/simpan", [BaristaController::class, 'simpan'])->name("simpan_barista");
    Route::get("barista/tampil/{id}", [BaristaController::class, 'tampil'])->name("tampil_barista");
    Route::get("barista/semua", [BaristaController::class, 'semua'])->name("semua_barista");
    Route::get("barista/ubah/{id}", [BaristaController::class, 'ubah'])->name("ubah_barista");
    Route::put("barista/update/{id}", [BaristaController::class, 'update'])->name("update_barista");
    Route::delete("barista/hapus/{id}", [BaristaController::class, 'hapus'])->name("hapus_barista");

    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("cetak/buat", [CetakController::class, 'buat'])->name("buat_cetak");
    Route::post("cetak/simpan", [CetakController::class, 'simpan'])->name("simpan_cetak");
    Route::get("cetak/tampil/{id}", [CetakController::class, 'tampil'])->name("tampil_cetak");
    Route::get("cetak/semua", [CetakController::class, 'semua'])->name("semua_cetak");
    Route::get("cetak/ubah/{id}", [CetakController::class, 'ubah'])->name("ubah_cetak");
    Route::put("cetak/update/{id}", [CetakController::class, 'update'])->name("update_cetak");
    Route::delete("cetak/hapus/{id}", [CetakController::class, 'hapus'])->name("hapus_cetak");

    Route::get("minuman/buat", [MinumanController::class, 'buat'])->name("buat_minuman");
    Route::post("minuman/simpan", [MinumanController::class, 'simpan'])->name("simpan_minuman");
    Route::get("minuman/tampil/{id}", [MinumanController::class, 'tampil'])->name("tampil_minuman");
    Route::get("minuman/semua", [MinumanController::class, 'semua'])->name("semua_minuman");
    Route::get("minuman/ubah/{id}", [MinumanController::class, 'ubah'])->name("ubah_minuman");
    Route::put("minuman/update/{id}", [MinumanController::class, 'update'])->name("update_minuman");
    Route::delete("minuman/hapus/{id}", [MinumanController::class, 'hapus'])->name("hapus_minuman");


});
