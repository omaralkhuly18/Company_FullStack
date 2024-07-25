<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PricingPlan extends Model
{
    use HasFactory;
    protected $fillable = ['photo', 'name','price','period','btn_text','btn_url','name_ar','btn_text_ar'];
    public function pricingOptions(): HasMany
    {
        return $this->hasMany(PricingOption::class, 'pricing_id');
    }
}
