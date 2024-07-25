<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'slug',
        'descr',
        'seo_title',
        'seo_descr',
        'title_ar',
        'slug_ar',
        'descr_ar',
        'seo_title_ar',
        'seo_descr_ar',
        'photo',
    ];

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function tags()
    {
        return $this->hasMany(PostTag::class, 'post_id');
    }

    
}
