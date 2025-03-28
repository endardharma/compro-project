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
        Schema::table('kategori_layanan', function (Blueprint $table) {
            $table->dropColumn('tipe_kategori_id');
            $table->bigInteger('tipe_kategori_id')->after('perusahaan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipe_kategori_id_on_kategori_layanan', function (Blueprint $table) {
            //
        });
    }
};
