<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'slug',
        'descr',
        'seo_title',
        'seo_descr',
        'name_ar',
        'slug_ar',
        'descr_ar',
        'seo_title_ar',
        'seo_descr_ar',
        'photo',
        'amount',
        'price',
        'discount',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
