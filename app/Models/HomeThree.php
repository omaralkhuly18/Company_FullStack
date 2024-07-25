<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeThree extends Model
{
    use HasFactory;
    protected $fillable = [
        'how_many_service',
        'service_status',
        'welcome_two_status',
        'offer_status',
        'portfolio_heading',
        'portfolio_subheading',
        'portfolio_text',
        'portfolio_heading_ar',
        'portfolio_subheading_ar',
        'portfolio_text_ar',
        'how_many_portfolio',
        'portfolio_status',
        'video_one_status',
        'feature_one_status',
        'call_to_action_status',
        'client_status',
        'team_member_heading',
        'team_member_subheading',
        'team_member_heading_ar',
        'team_member_subheading_ar',
        'how_many_team_member',
        'team_member_status',
        'contact_heading',
        'contact_subheading',
        'contact_heading_ar',
        'contact_subheading_ar',
        'contact_status',
        'photo_home_three',
    ];
}
