@extends("blank")

@section("konten")

<table class="table">
<center><h1>Tabel Pesanan</h1></center>
<a href="{{ route("buat_cetak") }}" >
<button type="submit" class="btn btn-secondary">Buat Pesanan</button></a><br><br>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Pemesan</th>
            <th scope="col">Minuman</th>
            <th scope="col">Qty</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $cetak)
        <tr>
            <th scope="row">{{$cetak->id}}</th>
            <td>{{$cetak->tanggal}}</td>
            <td>{{$cetak->nama}}</td>
            <td>{{$cetak->minuman}}</td>
            <td>{{$cetak->qty}}</td>
            <td>
            <a href="{{ route("ubah_cetak", ["id" => $cetak->id]) }}">Edit | </a>
            <a href="{{ route("tampil_cetak", ["id" => $cetak->id]) }}">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif


            <form action = "{{ route("hapus_cetak", ['id' => $cetak->id])}}" method="post">
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