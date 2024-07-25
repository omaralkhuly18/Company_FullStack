<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFAQ extends Model
{
    use HasFactory;
    protected $fillable = ['question','question_ar','answer','answer_ar'];

}
