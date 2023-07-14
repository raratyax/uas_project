<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'tanggal',
        'total',
        'pelanggan_id',
    ];
        public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
        }
}
