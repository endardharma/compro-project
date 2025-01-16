<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPerusahaan extends Model
{
    use HasFactory;
    
    protected $table = 'informasi_perusahaan';
    protected $fillable = ['nama_perusahaan', 'visi', 'misi', 'alamat', 'telephone', 'email', 'profile_perusahaan', 'profile_singkat', 'deskripsi', 'is_selected'];
}
