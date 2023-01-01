@extends("blank")

@section("konten")

    <h1>{{ $minuman->nama }}</h1>
    Kategori : {{ $minuman->nama_kategori }} <br>
    ID Kategori : {{ $minuman->id_kategori }}<br>
    {{ $minuman->gambar }}<br>
    Deskripsi : {{ $minuman->deskripsi }}<br>
    Rp. {{ $minuman->harga }}<br>

@endsection