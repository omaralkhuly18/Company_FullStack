<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'approved',
        'pricing_id',
    ];

    public function pricing()
    {
        return $this->belongsTo(PricingPlan::class, 'pricing_id');
    }
}
