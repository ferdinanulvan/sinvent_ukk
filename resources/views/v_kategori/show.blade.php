@extends('layouts.adm-main')

@section('content')

<div class="container">

    <h2>Detail Kategori</h2>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $rsetKategori->id }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $rsetKategori->deskripsi }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $rsetKategori->kategori }}</td>
        </tr>
        <tr>
            <th>Keterangan Kategori</th>
            <td>{{ $rsetKategori->ketkategori }}</td>
        </tr>
    </table>
    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali ke Kategori</a>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali ke Barang</a>

</div>

@endsection