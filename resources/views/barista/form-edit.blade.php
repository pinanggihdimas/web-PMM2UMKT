@extends("blank")

@section("konten")

    <form action="{{ route("update_barista", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        <div class="col-lg-6">
        <div class="p-5">
        <center><h3>EDIT BARISTA</h3></center><br>
        <div class="form-group">
            <label>Nama Barista</label>
            <input type="text" name="nama_barista" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Jenis kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
            <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita 
        </div>
        <div class="form-group">
            <label>No. Telp</label>
            <input type="text" name="notlp" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control form-control-user" required>
        </div>
        <button type="submit" class="btn btn-secondary">Simpan</button>
</div>
</div>
    </form>


@endsection