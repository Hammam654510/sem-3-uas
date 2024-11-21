<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pelanggan',
        'nama_pelanggan',
        'email_pelanggan',
        'password_pelanggan',
        'alamat_pelanggan',
    ];

    // Relasi ke wishlist
    public function wishlists()
    {
        return $this->hasMany(wishlist::class, 'id_pelanggan', 'id_pelanggan');
    }

    // Relasi ke Pembayaran
    public function pembayaran()
    {
    return $this->hasMany(pembayaran::class, 'pem_id_pelanggan', 'id_pelanggan');
    }

}
