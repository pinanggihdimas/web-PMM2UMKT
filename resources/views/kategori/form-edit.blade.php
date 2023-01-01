@extends("blank")

@section("konten")

    <form action="{{ route("update_kategori", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        <div class="col-lg-6">
        <div class="p-5">
        <center><h3>EDIT KATEGORI</h3></center><br>
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