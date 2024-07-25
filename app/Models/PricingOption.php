<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingOption extends Model
{
    use HasFactory;
    protected $fillable = ['name','name_ar'];
    public function pricingPlan(): BelongsTo
    {
        return $this->belongsTo(PricingPlan::class, 'pricing_id');
    }
}
