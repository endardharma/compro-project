<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriLayanan extends Model
{
    use HasFactory;

    protected $table = 'kategori_layanan';
    protected $fillable = ['perusahaan_id', 'nama_kategori', 'deskripsi', 'action_invitation', 'images', 'is_selected'];

    public function informasiPerusahaan()
    {
        return $this->belongsTo(informasiPerusahaan::class, 'perusahaan_id');
    }
}
