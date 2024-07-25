<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'name_ar',
        'slug',
        'slug_ar',
        'descr',
        'descr_ar',
        'date',
        'client',
        'client_ar',
        'website',
        'location',
        'location_ar',
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
        'photo',
        'banner',
    ];
}
