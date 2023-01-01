@extends("blank")

@section("konten")

    <h1>Kategori : {{ $kategori->nama_kategori }}</h1>
    ID Kategori : {{ $kategori->id_kategori }} <br>
    ID Minuman : {{ $kategori->minuman_id }}

@endsection