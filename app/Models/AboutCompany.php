<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;

    protected $table = 'about_companies';
    protected $fillable = ['company_information_id', 'deskripsi', 'list', 'deskripsi_akhir'];

    public function companyInformation()
    {
        return $this->belongsTo(CompanyInformation::class, 'company_information_id');
    }
}
