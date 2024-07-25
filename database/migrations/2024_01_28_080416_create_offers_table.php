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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(false);
            $table->string('heading_ar')->nullable(false);
            $table->string('sub_heading')->nullable(false);
            $table->string('sub_heading_ar')->nullable(false);
            $table->text('text')->nullable(false);
            $table->text('text_ar')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->string('tagline')->nullable(false);
            $table->string('tagline_ar')->nullable(false);
            $table->string('youtube_video_id')->nullable(false);
            $table->string('photo')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
