<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriLayanan extends Model
{
    use HasFactory;

    protected $table = 'kategori_layanan';
    protected $fillable = ['perusahaan_id', 'tipe_kategori_id', 'deskripsi', 'action_invitation', 'images', 'is_selected'];

    protected $casts = [
        'is_selected' => 'array',
    ];

    public function informasiPerusahaan()
    {
        return $this->belongsTo(informasiPerusahaan::class, 'perusahaan_id');
    }

    public function tipeKategori()
    {
        return $this->belongsTo(TipeKategori::class, 'tipe_kategori_id');
    }
}
