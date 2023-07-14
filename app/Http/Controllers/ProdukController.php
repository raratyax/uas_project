<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produk = Produk::with('kategori_produk')->get();
        return view('admin.produk.produk',compact('produk'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = KategoriProduk::all(); 
        return view('admin.produk.create',compact('produk')); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk;
        $produk->save();

        return redirect('/admin/produk');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::with('kategori_produk')->find($id);
        return view('admin.produk.show',compact('produk'));
     //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::with('kategori_produk')->find($id);
        $data_kategori = KategoriProduk::all();
        return view('admin.produk.edit',compact('produk','data_kategori'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $update = Produk::find($request->id);
        $update->kode = $request->kode;
        $update->nama = $request->nama;
        $update->harga_jual = $request->harga_jual;
        $update->harga_beli = $request->harga_beli;
        $update->stok = $request->stok;
        $update->min_stok = $request->min_stok;
        $update->deskripsi = $request->deskripsi;
        $update->kategori_produk_id = $request->kategori_produk;
        $update->save();
 
        return redirect('admin/produk');
     
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
     
       $produk = Produk::find($id);
       $produk->delete();

       return redirect('admin/produk');
        //
    }
}
