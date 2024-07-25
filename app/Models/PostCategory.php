<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'slug',
        'seo_title',
        'seo_descr',
        'name_ar',
        'slug_ar',
        'seo_title_ar',
        'seo_descr_ar',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
