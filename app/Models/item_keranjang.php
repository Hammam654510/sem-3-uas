<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_keranjang extends Model
{
    use HasFactory;

    protected $table = 'item_keranjang';
    protected $primaryKey = 'id_item_keranjang';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_item_keranjang',
        'id_keranjang',
        'id_buku',
        'jumlah',
        'subtotal',
    ];

    // Relasi ke keranjang
    public function keranjang_belanja()
    {
        return $this->belongsTo(keranjang_belanja::class, 'id_keranjang', 'id_keranjang');
    }

    // Relasi ke buku
    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id_buku');
    }
}
