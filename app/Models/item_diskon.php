<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_diskon extends Model
{
    use HasFactory;

    protected $table = 'item_diskon';
    protected $primaryKey = 'id_item_diskon';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_item_diskon',
        'id_diskon',
        'id_buku',
    ];

    // Relasi ke DiskonDanPromo
    public function diskon_dan_promo()
    {
        return $this->belongsTo(diskon_dan_promo::class, 'id_diskon', 'id_diskon');
    }

    // Relasi ke Buku
    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id_buku');
    }
}
