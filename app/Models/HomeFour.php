<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFour extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_heading',
        'service_subheading',
        'service_heading_ar',
        'service_subheading_ar',
        'how_many_service',
        'service_status',
        'marquee_status',
        'welcome_two_status',
        'portfolio_heading',
        'portfolio_subheading',
        'portfolio_heading_ar',
        'portfolio_subheading_ar',
        'how_many_portfolio',
        'portfolio_status',
        'choose_two_status',
        'testimonial_heading',
        'testimonial_subheading',
        'testimonial_text',
        'testimonial_heading_ar',
        'testimonial_subheading_ar',
        'testimonial_text_ar',
        'testimonial_status',
        'team_member_heading',
        'team_member_subheading',
        'team_member_heading_ar',
        'team_member_subheading_ar',
        'how_many_team_member',
        'team_member_status',
        'video_one_status',
        'client_status',
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
        'map_status',
        'photo_home_four',
    ];
}
