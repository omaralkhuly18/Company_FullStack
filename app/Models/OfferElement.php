<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'item',
        'item_ar',
    ];
}
