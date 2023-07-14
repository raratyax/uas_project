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
                                <table class="table mt-4">
                                    <tbody>
                                        <tr> 
                                            <td scope="row">1</td>
                                            <td scope="row">Kode </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->kode }}</td>
                                        </tr>
                                        
                                        <tr> 
                                            <td scope="row">2</td>
                                            <td scope="row">Nama </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->nama }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">3</td>
                                            <td scope="row">harga jual </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->harga_jual }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">4</td>
                                            <td scope="row">Harga Beli </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->harga_beli }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">5</td>
                                            <td scope="row">Stok </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->stok }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">6</td>
                                            <td scope="row">Min Stok </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->min_stok }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">7</td>
                                            <td scope="row">Deskripsi </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->deskripsi }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">8</td>
                                            <td scope="row">Jenis Produk Id </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$produk->kategori_produk->nama }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection