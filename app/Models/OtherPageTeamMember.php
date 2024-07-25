<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPageTeamMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
    ];
}
