@extends("blank")

@section("konten")

    <form action="{{ route("simpan_kategori") }}" method="post">
        @csrf

        <div class="col-lg-6">
        <div class="p-5">
        <center><h3>TAMBAHKAN KATEGORI</h3></center><br>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="nama_kategori" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>ID Minuman</label>
            <input type="text" name="minuman_id" class="form-control form-control-user" required>
        </div>
        <button type="submit" class="btn btn-secondary">Simpan</button>
</div>
</div>
    </form>


@endsection