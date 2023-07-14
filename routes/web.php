<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['auth','peran:manager-admin']],function (){



    Route::prefix('admin')->group(function () { 
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); //buat route produk 
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('create');
        Route::post('produk/store', [ProdukController::class, 'store'])->name('store');
        Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
        Route::get('produk/show/{id}', [ProdukController::class, 'show'])->name('show'); 
        Route::post('produk/update', [ProdukController::class, 'update'])->name('update');
        Route::get('produk/delete/{id}',[ProdukController::class, 'delete'])->name('delete');
        Route::get('/pesanan',[PesananController::class, 'index'])->name('pesanan'); 
        Route::get('/kategori',[KategoriProdukController::class, 'index'])->name('kategori'); 
        Route::get('/kategori/create', [KategoriProdukController::class, 'create'])->name('create');
        Route::post('/kategori/store', [KategoriProdukController::class, 'store'])->name('store');
        Route::get('/kategori/show/{id}', [KategoriProdukController::class, 'show'])->name('show');
        Route::get('/kategori/edit/{id}',[KategoriProdukController::class, 'edit'])->name('edit'); 
        Route::post('/kategori/update', [KategoriProdukController::class, 'update'])->name('update');
        Route::get('/kategori/delete/{id}',[KategoriProdukController::class, 'delete'])->name('delete'); 
        //note endpoint route gak boleh sama
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FashionController::class, 'index'])->name('index');
Route::post('/pesanan/store', [FashionController::class, 'store'])->name('store');
