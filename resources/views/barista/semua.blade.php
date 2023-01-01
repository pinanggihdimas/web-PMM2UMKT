
@extends("blank")

@section("konten")
<div class="card shadow mb-4">
    <div class="card-header py-3">
            <div class="card-body">
                <div class="table-responsive">
<table table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<center><h1>DATA BARISTA</h1></center>
<a href="{{ route("buat_barista") }}" >
<button type="submit" class="btn btn-secondary">Buat Barista</button></a><br><br>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barista</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Email</th>
            <th scope="col">Create</th>
            <th scope="col">Update</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $barista)
        <tr>
            <th scope="row">{{$barista->id}}</th>
            <td>{{$barista->nama_barista}}</td>
            <td>{{$barista->jenis_kelamin}}</td>
            <td>{{$barista->notlp}}</td>
            <td>{{$barista->email}}</td>
            <td>{{$barista->created_at}}</td>
            <td>{{$barista->updated_at}}</td>
            <td>
            <a href="{{ route("ubah_barista", ["id" => $barista->id]) }}">Edit | </a>
            <a href="{{ route("tampil_barista", ["id" => $barista->id]) }}">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif


            <form action = "{{ route("hapus_barista", ['id' => $barista->id])}}" method="post">
            @csrf
            @method("delete")
            <button class="btn btn-primary" type="submit" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
</form></td>
        </tr>
</body>
        @endforeach
</table>
</div>
    </div>
    </div>
</div>
@endsection