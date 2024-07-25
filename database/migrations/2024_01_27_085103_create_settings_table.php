<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('sticky');
            $table->string('favicon');
            $table->string('page404');
            $table->string('banner');
            $table->string('login');

            $table->string('home_shown');
            $table->string('home_seo_title');
            $table->string('home_seo_title_ar');
            $table->string('home_seo_descr');
            $table->string('home_seo_descr_ar');
            
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('pintrest');
            $table->string('top_email');
            $table->string('top_address');
            $table->string('top_address_ar');
            $table->string('top_phone');
            $table->string('footer_email');
            $table->string('footer_phone');
            $table->string('footer_address');
            $table->string('footer_address_ar');
            $table->string('footer_copyright');
            $table->string('footer_copyright_ar');
            $table->string('footer_text');
            $table->string('footer_text_ar');
            $table->string('footer_links');
            $table->string('footer_links_ar');
            $table->string('footer_subscriber');
            $table->string('footer_subscriber_ar');
            $table->string('footer_subscriber_text');
            $table->string('footer_subscriber_text_ar');
            $table->text('map');
            $table->string('cookie_message');
            $table->string('cookie_text_color');
            $table->string('cookie_bg_color');
            $table->string('cookie_btn_text_color');
            $table->string('cookie_btn_bg_color');
            $table->string('cookie_btn_text');
            $table->boolean('cookie_status');
            $table->string('google_code');
            $table->boolean('google_status');
            $table->string('google_recabtcha');
            $table->boolean('google_recabtcha_status');
            $table->string('livewire_id');
            $table->boolean('livewire_status');
            $table->boolean('sticky_header');
            $table->boolean('preloader');
            $table->enum('layout_direction', ['LTR', 'RTL'])->default('LTR');
            $table->string('theme_color');
            $table->enum('language', ['ar', 'en'])->default('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
