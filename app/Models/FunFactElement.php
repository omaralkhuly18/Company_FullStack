<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFactElement extends Model
{
    use HasFactory;
    protected $fillable = ['name','name_ar','number','icon'];
    public function funFact()
    {
        return $this->belongsTo(FunFact::class);
    }
}
