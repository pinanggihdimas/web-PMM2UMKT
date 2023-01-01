@extends("blank")

@section("konten")
<div class="col-lg-6">
        <div class="p-5">
    <form action="{{ route("update_minuman", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")
        <center><h3>EDIT MINUMAN</h3></center><br>
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="text" name="id_kategori" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Minuman</label>
            <input type="text" name="nama" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="textarea" name="deskripsi" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Kategori : </label>
            <input type="radio" name="nama_kategori" value="Kopi" required> Kopi
            <input type="radio" name="nama_kategori" value="EsTeh" required> EsTeh 
        </div>
        <button type="submit" class="btn btn-secondary">Simpan</button>
    </form>
</div>
</div>

@endsection