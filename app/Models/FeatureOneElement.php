<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureOneElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'heading',
        'text',
    ];
}
