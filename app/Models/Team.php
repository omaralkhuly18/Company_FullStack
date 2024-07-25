<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name','name_ar','slug','slug_ar','designation','designation_ar',
    'tagline','tagline_ar','email','phone','website','facebook','twitter','linkedin',
    'instagram','youtube','pintrest','experience_text','experience_text_ar','seo_title',
    'seo_title_ar','seo_descr','seo_descr_ar','photo'];
}
