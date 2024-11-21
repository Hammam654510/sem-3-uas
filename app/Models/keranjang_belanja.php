<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang_belanja extends Model
{
    use HasFactory;

    protected $table = 'keranjang_belanja';
    protected $primaryKey = 'id_keranjang';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_keranjang',
        'status',
    ];

    // Relasi ke item keranjang
    public function item_keranjang()
    {
        return $this->hasMany(item_keranjang::class, 'id_keranjang', 'id_keranjang');
    }
}
