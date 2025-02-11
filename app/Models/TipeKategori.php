<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKategori extends Model
{
    use HasFactory;
    
    protected $table = 'tipe_kategoris';
    protected $fillable = ['nama_tipe_kategori', 'code_icon'];
}
