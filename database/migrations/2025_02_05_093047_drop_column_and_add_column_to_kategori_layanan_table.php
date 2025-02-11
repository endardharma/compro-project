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
            $table->dropColumn('is_active');
            $table->boolean('is_selected')->after('images')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori_layanan', function (Blueprint $table) {
            //
        });
    }
};
