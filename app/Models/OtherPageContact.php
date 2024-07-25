<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPageContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'send_mail_heading',
        'send_mail_heading_ar',
        'send_mail_subheading',
        'send_mail_subheading_ar',
        'information_heading',
        'information_heading_ar',
        'information_subheading',
        'information_subheading_ar',
        'information_text',
        'information_text_ar',
        'information_phone_title',
        'information_phone_title_ar',
        'information_phone_value',
        'information_email_title',
        'information_email_title_ar',
        'information_email_value',
        'information_address_title',
        'information_address_title_ar',
        'information_address_value',
        'information_address_value_ar',
        'seo_title',
        'seo_title_ar',
        'seo_descr',
        'seo_descr_ar',
    ];
}
