<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diskon_dan_promo extends Model
{
    use HasFactory;

    protected $table = 'diskon_dan_promo';
    protected $primaryKey = 'id_diskon';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_diskon',
        'kode_diskon',
        'deskripsi_diskon',
        'persen_diskon',
        'tanggal_mulai_diskon',
        'tanggal_berakhir_diskon',
    ];

    // Relasi ke ItemDiskon
    public function item_diskon()
    {
        return $this->hasMany(item_diskon::class, 'id_diskon', 'id_diskon');
    }
}
