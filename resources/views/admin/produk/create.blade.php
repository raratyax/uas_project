@extends('layouts.app')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <form action="{{url('admin/produk/store')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Min_Stok</label>
                                        <div class="col-8">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">deskripsi</label>
                                        <div class="col-8">
                                            <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kategori_produk" class="col-4 col-form-label">kategori_produk</label>
                                        <div class="col-8">
                                            <select name="kategori_produk" id="kategori_produk" class="form-control">

                                                @foreach ($produk as $p)
                                               <option value="{{$p->id}}">{{$p->nama}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
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