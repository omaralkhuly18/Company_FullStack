<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseTwoElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'icon',
    ];
}
