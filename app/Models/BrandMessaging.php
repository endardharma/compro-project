<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandMessaging extends Model
{
    protected $table = 'brand_messagings';

    protected $fillable = ['title', 'content', 'content_footer', 'is_selected'];
}
