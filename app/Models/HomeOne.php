<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'how_many_service_slider',
        'service_slider_status',
        'welcome_one_status',
        'service_heading',
        'service_subheading',
        'service_heading_ar',
        'service_subheading_ar',
        'how_many_service',
        'service_status',
        'video_one_status',
        'funfact_status',
        'portfolio_heading',
        'portfolio_subheading',
        'portfolio_heading_ar',
        'portfolio_subheading_ar',
        'how_many_portfolio',
        'portfolio_status',
        'contact_heading',
        'contact_subheading',
        'contact_heading_ar',
        'contact_subheading_ar',
        'contact_status',
        'blog_heading',
        'blog_subheading',
        'blog_heading_ar',
        'blog_subheading_ar',
        'how_many_blog',
        'blog_status',
        'video_two_status',
        'feature_one_status',
        'testimonial_heading',
        'testimonial_subheading',
        'testimonial_text',
        'testimonial_heading_ar',
        'testimonial_subheading_ar',
        'testimonial_text_ar',
        'testimonial_status',
        'choose_one_status',
        'client_status',
        'photo_home_one',
    ];
}
