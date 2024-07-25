<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPageSearch extends Model
{
    use HasFactory;
    protected $fillable = [
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
    ];
}
