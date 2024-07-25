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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('title_ar')->nullable(false);
            $table->boolean('welcome_one_status')->default(1);
            $table->text('service_heading')->nullable(false);
            $table->text('service_heading_ar')->nullable(false);
            $table->string('service_subheading')->nullable(false);
            $table->string('service_subheading_ar')->nullable(false);
            $table->text('service_text')->nullable(false);
            $table->text('service_text_ar')->nullable(false);
            $table->unsignedInteger('how_many_service')->nullable(false);
            $table->boolean('service_status')->default(1);
            $table->text('team_member_heading')->nullable(false);
            $table->text('team_member_heading_ar')->nullable(false);
            $table->string('team_member_subheading')->nullable(false);
            $table->string('team_member_subheading_ar')->nullable(false);
            $table->unsignedInteger('how_many_team_member')->nullable(false);
            $table->boolean('team_member_status')->default(1);
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
        Schema::dropIfExists('abouts');
    }
};
