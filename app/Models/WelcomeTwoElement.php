<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeTwoElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'heading_ar',
        'text',
        'text_ar'
    ];
}
