
@extends("blank")

@section("konten")

<table class="table">
<center><h1>MINUMAN</h1></center>
<a href="{{ route("buat_minuman") }}" >
<button type="submit" class="btn btn-secondary">Buat Minuman</button></a><br><br>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Minuman</th>
            <th scope="col">Kategori</th>
            <th scope="col">ID Kategori</th>
            <th scope="col">Gambar</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Create</th>
            <th scope="col">Update</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $minuman)
        <tr>
            <th scope="row">{{$minuman->id}}</th>
            <td>{{$minuman->nama}}</td>
            <td>{{$minuman->nama_kategori}}</td>
            <td>{{$minuman->id_kategori}}</td>
            <td>{{$minuman->gambar}}</td>
            <td>{{$minuman->deskripsi}}</td>
            <td>{{$minuman->harga}}</td>
            <td>{{$minuman->created_at}}</td>
            <td>{{$minuman->updated_at}}</td>
            <td>
            <a href="{{ route("ubah_minuman", ["id" => $minuman->id]) }}">Edit | </a>
            <a href="{{ route("tampil_minuman", ["id" => $minuman->id]) }}">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif


            <form action = "{{ route("hapus_minuman", ['id' => $minuman->id])}}" method="post">
            @csrf
            @method("delete")
            <button class="btn btn-primary" type="submit" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
</form></td>
        </tr>
</body>
        @endforeach
</table>
@endsection