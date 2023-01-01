@extends("blank")

@section("konten")
    Pemesan<br>
    <h1>{{ $cetak->nama }}</h1>

    Tanggal : {{ $cetak->tanggal }}<br>
    Pesanan : {{ $cetak->minuman }}<br>
    Quantity : {{ $cetak->qty }}<br>

@endsection