<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlist';
    protected $primaryKey = 'id_wishlist';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_wishlist',
        'id_pelanggan',
        'id_buku',
    ];

    // Relasi ke pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    // Relasi ke buku
    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id_buku');
    }
}
