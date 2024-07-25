<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFact extends Model
{
    use HasFactory;
    protected $fillable = ['heading','sub_heading','text','heading_ar','sub_heading_ar','text_ar'];
    public function elements()
    {
        return $this->hasMany(FunFactElement::class);
    }
}
