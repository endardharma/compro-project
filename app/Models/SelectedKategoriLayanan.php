<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectedKategoriLayanan extends Model
{
    protected $table = 'selected_kategori_layanan';

    protected $fillable = ['kategori_layanan_id', 'perusahaan_id', 'tipe_kategori_id'];

    public function kategoriLayanan()
    {
        return $this->belongsTo(KategoriLayanan::class, 'kategori_layanan_id');
    }

    public function informasiPerusahaan()
    {
        return $this->belongsTo(InformasiPerusahaan::class, 'perusahaan_id');
    }
}
