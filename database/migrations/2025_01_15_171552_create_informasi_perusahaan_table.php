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
        Schema::create('informasi_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('visi');
            $table->string('misi');
            $table->string('alamat');
            $table->bigInteger('telephone');
            $table->string('email')->unique();
            $table->string('profile_perusahaan');
            $table->string('profile_singkat');
            $table->string('deskripsi');
            $table->boolean('is_selected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_perusahaan');
    }
};
