<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'name_ar',
        'slug',
        'slug_ar',
        'short_descr',
        'short_descr_ar',
        'descr',
        'descr_ar',
        'icon',
        'phone',
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
        'photo',
        'banner',
        'pdf',
    ];
}
