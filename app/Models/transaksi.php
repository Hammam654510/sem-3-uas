<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $incrementing = false; // Karena primary key bukan auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'id_transaksi',
        'pem_id_pelanggan',
        'tra_id_pelanggan',
        'id_pembayaran',
        'total',
        'tanggal_transaksi',
    ];

    // Relasi ke pelanggan (pemilik transaksi)
    public function pelangganPemilik()
    {
        return $this->belongsTo(pelanggan::class, 'pem_id_pelanggan', 'id_pelanggan');
    }

    // Relasi ke pelanggan lain (terkait transaksi)
    public function pelangganTerkait()
    {
        return $this->belongsTo(pelanggan::class, 'tra_id_pelanggan', 'id_pelanggan');
    }

    // Relasi ke pembayaran
    public function pembayaran()
    {
        return $this->belongsTo(pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }
}
