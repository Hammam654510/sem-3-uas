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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->char('id_pelanggan', 5)->primary();
            $table->string('nama_pelanggan', 50);
            $table->string('email_pelanggan', 50);
            $table->string('password_pelanggan', 16);
            $table->string('alamat_pelanggan', 100);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
