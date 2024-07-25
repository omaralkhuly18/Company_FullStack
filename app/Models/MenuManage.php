<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuManage extends Model
{
    use HasFactory;
    protected $fillable = ['menu_name','menu_name_ar','identifier_name','status'];
    
}
