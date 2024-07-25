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
        Schema::create('other_page_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('title_ar')->nullable(false);
            $table->string('send_mail_heading')->nullable(false);
            $table->string('send_mail_heading_ar')->nullable(false);
            $table->string('send_mail_subheading')->nullable(false);
            $table->string('send_mail_subheading_ar')->nullable(false);
            $table->string('information_heading')->nullable(false);
            $table->string('information_heading_ar')->nullable(false);
            $table->string('information_subheading')->nullable(false);
            $table->string('information_subheading_ar')->nullable(false);
            $table->text('information_text')->nullable(false);
            $table->text('information_text_ar')->nullable(false);
            $table->string('information_phone_title')->nullable(false);
            $table->string('information_phone_title_ar')->nullable(false);
            $table->string('information_phone_value')->nullable(false);
            $table->string('information_email_title')->nullable(false);
            $table->string('information_email_title_ar')->nullable(false);
            $table->string('information_email_value')->nullable(false);
            $table->string('information_address_title')->nullable(false);
            $table->string('information_address_title_ar')->nullable(false);
            $table->string('information_address_value')->nullable(false);
            $table->string('information_address_value_ar')->nullable(false);
            $table->string('seo_title')->nullable(false);
            $table->string('seo_title_ar')->nullable(false);
            $table->text('seo_descr')->nullable(false);
            $table->text('seo_descr_ar')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_page_contacts');
    }
};
