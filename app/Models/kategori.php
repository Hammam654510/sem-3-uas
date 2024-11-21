<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_kategori',
        'nama_kategori',
    ];

    // Relasi ke buku
    public function bukus()
    {
        return $this->hasMany(buku::class, 'id_kategori', 'id_kategori');
    }
}
