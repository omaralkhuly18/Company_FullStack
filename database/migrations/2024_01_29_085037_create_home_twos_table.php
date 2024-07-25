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
        Schema::create('home_twos', function (Blueprint $table) {
            $table->id();
            $table->text('service_heading')->nullable(false);
            $table->text('service_heading_ar')->nullable(false);
            $table->string('service_subheading')->nullable(false);
            $table->string('service_subheading_ar')->nullable(false);
            $table->unsignedInteger('how_many_service')->nullable(false);
            $table->boolean('service_status')->default(1);

            $table->boolean('marquee_status')->default(1);

            $table->boolean('welcome_two_status')->default(1);

            $table->text('portfolio_heading')->nullable(false);
            $table->text('portfolio_heading_ar')->nullable(false);
            $table->string('portfolio_subheading')->nullable(false);
            $table->string('portfolio_subheading_ar')->nullable(false);
            $table->unsignedInteger('how_many_portfolio')->nullable(false);
            $table->boolean('portfolio_status')->default(1);


            $table->boolean('choose_two_status')->default(1);

            $table->text('testimonial_heading')->nullable(false);
            $table->text('testimonial_heading_ar')->nullable(false);
            $table->string('testimonial_subheading')->nullable(false);
            $table->string('testimonial_subheading_ar')->nullable(false);
            $table->text('testimonial_text')->nullable(false);
            $table->text('testimonial_text_ar')->nullable(false);
            $table->boolean('testimonial_status')->default(1);


            $table->text('team_member_heading')->nullable(false);
            $table->text('team_member_heading_ar')->nullable(false);
            $table->string('team_member_subheading')->nullable(false);
            $table->string('team_member_subheading_ar')->nullable(false);
            $table->unsignedInteger('how_many_team_member')->nullable(false);
            $table->boolean('team_member_status')->default(1);

            $table->boolean('client_status')->default(1);


            $table->text('contact_heading')->nullable(false);
            $table->text('contact_heading_ar')->nullable(false);
            $table->string('contact_subheading')->nullable(false);
            $table->string('contact_subheading_ar')->nullable(false);
            $table->boolean('contact_status')->default(1);

            $table->text('blog_heading')->nullable(false);
            $table->text('blog_heading_ar')->nullable(false);
            $table->string('blog_subheading')->nullable(false);
            $table->string('blog_subheading_ar')->nullable(false);
            $table->unsignedInteger('how_many_blog')->nullable(false);
            $table->boolean('blog_status')->default(1);

            $table->boolean('map_status')->default(1);
         

            $table->string('photo_home_two')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_twos');
    }
};
