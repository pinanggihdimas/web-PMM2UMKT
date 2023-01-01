
@extends("blank")

@section("konten")

<table class="table">
<center><h1>KATEGORI</h1></center>
<a href="{{ route("buat_kategori") }}" >
<button type="submit" class="btn btn-secondary">Buat Kategori</button></a><br><br>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Minuman ID</th>
            <th scope="col">Create</th>
            <th scope="col">Update</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $kategori)
        <tr>
            <th scope="row">{{$kategori->id}}</th>
            <td>{{$kategori->nama_kategori}}</td>
            <td>{{$kategori->minuman_id}}</td>
            <td>{{$kategori->created_at}}</td>
            <td>{{$kategori->updated_at}}</td>
            <td>
            <a href="{{ route("ubah_kategori", ["id" => $kategori->id]) }}">Edit | </a>
            <a href="{{ route("tampil_kategori", ["id" => $kategori->id]) }}">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif


            <form action = "{{ route("hapus_kategori", ['id' => $kategori->id])}}" method="post">
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