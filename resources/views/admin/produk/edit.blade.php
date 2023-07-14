@extends('layouts.app')

@section('content')

<!-- <?php $title = "Edit $produk->nama" ?> -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <form action="{{url('admin/produk/update')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control" value ="{{ $produk->kode }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control" value ="{{ $produk->nama }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control" value ="{{ $produk->harga_jual }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control" value ="{{ $produk->harga_beli }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control" value ="{{ $produk->stok }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                        <div class="col-8">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control" value ="{{ $produk->min_stok }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                        <div class="col-8">
                                            <input id="deskripsi" name="deskripsi" type="text" class="form-control" value ="{{ $produk->deskripsi }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kategori_produk" class="col-4 col-form-label">Kategori Produk</label>
                                        <div class="col-8">
                                            <select name="kategori_produk" id="kategori_produk" class="form-control">

                                                @foreach ($data_kategori as $dk)
                                               <option value="{{$dk->id}}" @if ($produk->kategori_produk_id === $dk->id) selected @endif>{{$dk->nama}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input value ="{{ $produk->id }}" name ="id" type="hidden">
                                    <button type="submit" class="btn btn-success">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection