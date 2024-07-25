<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureTwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'heading_ar',
        'sub_heading',
        'text',
        'sub_heading_ar',
        'text_ar',
        'photo',
    ];
}
