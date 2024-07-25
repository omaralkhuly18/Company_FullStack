<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPageCustomPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'content',
        'seo_title',
        'seo_descr',
        'name_ar',
        'slug_ar',
        'content_ar',
        'seo_title_ar',
        'seo_descr_ar',
    ];
}
