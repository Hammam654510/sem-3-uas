<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $incrementing = false; // Karena primary key bukan auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'id_admin',
        'nama_admin',
        'email_admin',
        'password_admin',
    ];
}
