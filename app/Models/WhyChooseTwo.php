<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseTwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'subheading',
        'photo_over_text',
        'photo_over_heading',
        'photo',
    ];
}
