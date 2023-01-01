@extends("blank")

@section("konten")
<a href="{{ route("buat_barista") }}" >Add Barista</a>
    <h1> Nama : {{ $barista->nama_barista }}</h1>

   Jenis Kelamin : {{ $barista->jenis_kelamin }}<br>
   No Telp : {{ $barista->notlp }}<br>
   Email : {{ $barista->email }}<br>

@endsection