<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.a
     */
    public function up(): void
    {
        Schema::create('selected_kategori_layanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_layanan_id');
            $table->bigInteger('perusahaan_id');
            $table->bigInteger('tipe_kategori_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selected_kategori_layanan');
    }
};
