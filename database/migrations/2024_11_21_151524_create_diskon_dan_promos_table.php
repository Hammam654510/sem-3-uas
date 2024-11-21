<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskonDanPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon_dan_promo', function (Blueprint $table) {
            $table->char('id_diskon', 5)->primary();
            $table->string('kode_diskon', 20);
            $table->text('deskripsi_diskon')->nullable();
            $table->decimal('persen_diskon', 10, 2);
            $table->date('tanggal_mulai_diskon');
            $table->date('tanggal_berakhir_diskon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskon_dan_promo');
    }
}
