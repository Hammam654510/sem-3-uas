<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatepembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->char('id_pembayaran', 5)->primary();
            $table->char('tra_id_pelanggan', 5);
            $table->char('pem_id_pelanggan', 5);
            $table->string('metode_pembayaran', 15);
            $table->decimal('jumlah_bayar', 10, 2);
            $table->datetime('tanggal_pembayaran');
            $table->boolean('status_pembayaran');
            $table->timestamps();
        
            // Foreign keys
            $table->foreign('pem_id_pelanggan')->references('id_pelanggan')->on('pelanggan');
            $table->foreign('tra_id_pelanggan')->references('id_pelanggan')->on('pelanggan');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
