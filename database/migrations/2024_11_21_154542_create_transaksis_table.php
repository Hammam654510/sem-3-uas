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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->char('id_transaksi', 5)->primary();
            $table->char('pem_id_pelanggan', 5);
            $table->char('tra_id_pelanggan', 5);
            $table->char('id_pembayaran', 5)->nullable();
            $table->decimal('total', 10, 2);
            $table->datetime('tanggal_transaksi');
            $table->timestamps();

            // Foreign keys
            $table->foreign('pem_id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->foreign('tra_id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
