@extends('layouts.app')

@section('content')

@if (Auth::user()->role != 'pelanggan')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Minimal Stok</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Kategori Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($produk as $p)
                                            <tr> 
                                                <td scope="col">{{ $no }}</td>
                                                <td scope="col">{{ $p->kode }}</td>
                                                <td scope="col">{{ $p->nama }}</td>
                                                <td scope="col">{{ $p->harga_jual }}</td>
                                                <td scope="col">{{ $p->harga_beli }}</tp>
                                                <td scope="col">{{ $p->stok }}</td>
                                                <td scope="col">{{ $p->min_stok }}</td>
                                                <td scope="col">{{ $p->deskripsi }}</td>
                                                <td scope="col">{{ $p->kategori_produk->nama }}</td>
                                                <td> 
                                                    @if (Auth::user()->role == 'admin')
                                                    <a href="{{ url('admin/produk/delete', $p->id)}}" class="btn btn-success">Hapus</a>
                                                    @endif
                                                    <a href="{{ url('admin/produk/show', $p->id)}}" class="btn btn-success">View</a>
                                                    @if (Auth::user()->role == 'admin') 
                                                    <a href="{{ url('admin/produk/edit', $p->id)}}" class="btn btn-success">Edit</a>
                                                    @endif
                                                </td> 
                                            </tr> 
                                        @php $no++ @endphp 
                                        @endforeach                   
                                    </tbody>
                                </table>
                                @if (Auth::user()->role == 'admin')
                                <a href="{{ url('admin/produk/create')}}" class="btn btn-success mt-4">Input Baru</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@else
@include('admin.produk.denied')
@endif
@endsection