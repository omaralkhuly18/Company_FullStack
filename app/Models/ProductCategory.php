<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'slug',
        'seo_title',
        'seo_descr',
        'descr',
        'name_ar',
        'slug_ar',
        'seo_title_ar',
        'seo_descr_ar',
        'descr_ar',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
