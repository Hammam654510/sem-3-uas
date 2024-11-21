<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pembayaran',
        'tra_id_pelanggan',
        'pem_id_pelanggan',
        'metode_pembayaran',
        'jumlah_bayar',
        'tanggal_pembayaran',
        'status_pembayaran',
    ];

    // Relasi ke Transaksi
    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_pembayaran', 'id_pembayaran');
    }

    // Relasi ke Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'pem_id_pelanggan', 'id_pelanggan');
    }
}
