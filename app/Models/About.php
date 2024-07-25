<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'welcome_one_status',
        'service_heading',
        'service_heading_ar',
        'service_subheading',
        'service_subheading_ar',
        'service_text',
        'service_text_ar',
        'how_many_service',
        'service_status',
        'team_member_heading',
        'team_member_heading_ar',
        'team_member_subheading',
        'team_member_subheading_ar',
        'how_many_team_member',
        'team_member_status',
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
    ];
}
