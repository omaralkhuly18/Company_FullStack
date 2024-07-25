<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeTwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'heading_ar',
        'sub_heading',
        'sub_heading_ar',
        'text',
        'text_ar',
        'btn_text',
        'btn_text_ar',
        'btn_url',
        'experience_year',
        'photo1',
        'photo2',
    ];
}
