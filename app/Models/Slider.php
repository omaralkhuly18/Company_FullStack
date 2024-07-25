<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'text',
        'text_ar',
        'photo',
        'btn_text',
        'btn_text_ar',
        'btn_url',
    ];
}
