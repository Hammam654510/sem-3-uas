<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->char('id_buku', 5)->primary();
            $table->char('id_kategori', 5);
            $table->string('judul_buku', 30);
            $table->string('nama_penulis', 30);
            $table->decimal('harga_buku', 10, 2);
            $table->text('deskripsi_buku');
            $table->integer('stok_buku');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
