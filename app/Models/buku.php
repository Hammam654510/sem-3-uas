<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_buku',
        'id_kategori',
        'judul_buku',
        'nama_penulis',
        'harga_buku',
        'deskripsi_buku',
        'stok_buku',
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
    }

    // Relasi ke wishlist
    public function wishlists()
    {
        return $this->hasMany(wishlist::class, 'id_buku', 'id_buku');
    }
    // Relasi ke ItemDiskon
public function item_diskon()
{
    return $this->hasMany(item_diskon::class, 'id_buku', 'id_buku');
}

}
