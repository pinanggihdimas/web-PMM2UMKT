@extends("blank")

@section("konten")

    <form action="{{ route("simpan_minuman") }}" method="post">
        @csrf
    <div class="col-lg-6">
        <div class="p-5">
        <center><h3>TAMBAHKAN MINUMAN</h3></center><br>
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
            <input type="radio" name="nama_kategori" value="Coffee" required> Coffee
            <input type="radio" name="nama_kategori" value="Tea" required> Tea
            <input type="radio" name="nama_kategori" value="Milk" required> Milk 
        </div>
        

        <!-- @foreach($kategori as $kat)
            <input type="checkbox" name="kategori[]" value="{{ $kat->id }}"> {{ $kat->nama_kategori }}
        @endforeach -->
        


        <button class="btn btn-success" type="submit">Simpan</button>
    </form>
    </div>
</div>
    
    <script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace("minuman");
    </script>
@endsection
