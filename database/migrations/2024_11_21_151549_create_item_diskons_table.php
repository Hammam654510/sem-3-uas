<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDiskonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_diskon', function (Blueprint $table) {
            $table->char('id_item_diskon', 5)->primary();
            $table->char('id_diskon', 5);
            $table->char('id_buku', 5);
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_diskon')->references('id_diskon')->on('diskon_dan_promo');
            $table->foreign('id_buku')->references('id_buku')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_diskon');
    }
}
