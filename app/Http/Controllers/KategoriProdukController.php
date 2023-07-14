<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriProduk;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KategoriProduk::all();
        return view('admin.kategori.kategori',compact('data'));    
    // }
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = KategoriProduk::all();
        return view('admin.kategori.create',compact('data')); 
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new KategoriProduk;
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('/admin/kategori');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $kategori= KategoriProduk::all()->find($id);
        return view('admin.kategori.show',compact('kategori'));
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KategoriProduk::all()->find($id);
        return view('admin.kategori.edit',compact('data')); 
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    
       $data = KategoriProduk::find($request->id);
       $data->nama = $request->nama;
       $data->save();

       return redirect('admin/kategori');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
    
        $kategori = KategoriProduk::find($id);
        $kategori->delete();

        return redirect('admin/kategori');
        //
    }
}
