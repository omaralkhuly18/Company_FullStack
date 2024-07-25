<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'sticky',
        'favicon',
        'page404',
        'banner',
        'login',
        'home_shown',
        'home_seo_title',
        'home_seo_descr',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'pintrest',
        'top_email',
        'top_address',
        'top_address_ar',
        'top_phone',
        'footer_email',
        'footer_phone',
        'footer_address',
        'footer_address_ar',
        'footer_copyright',
        'footer_copyright_ar',
        'footer_text',
        'footer_text_ar',
        'footer_links',
        'footer_links_ar',
        'footer_subscriber',
        'footer_subscriber_ar',
        'footer_subscriber_text',
        'footer_subscriber_text_ar',
        'map',
        'cookie_message',
        'cookie_text_color',
        'cookie_bg_color',
        'cookie_btn_text_color',
        'cookie_btn_bg_color',
        'cookie_btn_text',
        'cookie_status',
        'google_code',
        'google_status',
        'google_recabtcha',
        'google_recabtcha_status',
        'livewire_id',
        'livewire_status',
        'sticky_header',
        'preloader',
        'layout_direction',
        'theme_color',
        'language'
    ];
}
