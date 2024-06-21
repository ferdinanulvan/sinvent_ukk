@extends('layouts.adm-main')

@section('content')
<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Search Results</h2>
    </div>
</div>
<div class="container-fluid">
    <h2>Barang</h2>
    @if(isset($barangs) && $barangs->isNotEmpty())
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class>
                <tr>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Seri</th>
                    <th width="30%">Spesifikasi</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th width="30%">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-dark lh-1 mb-0">
                @foreach($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->merk }}</td>
                        <td>{{ $barang->seri }}</td>
                        <td>{{ $barang->spesifikasi }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>
                            <a href="{{ route('kategori.show', $barang->kategori->id) }}" class="text-dark">
                                {{ $barang->kategori->nama }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa fa-trash"></i> Delete</button>  
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No results found for Barang.</p>
    @endif

    <h2>Kategori</h2>
    @if(isset($kategoris) && $kategoris->isNotEmpty())
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class>
                <tr>
                    <th>ID</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Keterangan Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-dark lh-1 mb-0">
                @foreach($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td>{{ $kategori->ketkategori }}</td>
                        <td>
                            <a href="{{ route('kategori.show', $kategori->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa fa-trash"></i> Delete</button>  
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No results found for Kategori.</p>
    @endif
</div>
@endsection