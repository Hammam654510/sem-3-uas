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
        Schema::create('item_keranjang', function (Blueprint $table) {
            $table->char('id_keranjang', 5);
            $table->char('id_item_keranjang', 5)->primary();
            $table->char('id_buku', 5);
            $table->integer('jumlah');
            $table->decimal('subtotal', 10, 2);
            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang_belanja');
            $table->foreign('id_buku')->references('id_buku')->on('buku');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_keranjangs');
    }
};
