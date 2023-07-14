<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = ['nama',];

    public function pesanan(){
    return $this->hasMany(Pesanan::class);
    } //fungsi ini mengarahkan ke model Produk
}
