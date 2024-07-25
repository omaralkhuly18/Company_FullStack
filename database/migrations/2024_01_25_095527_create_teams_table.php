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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->string('designation')->nullable(false);
            $table->string('designation_ar')->nullable(false);
            $table->string('tagline')->nullable();
            $table->string('tagline_ar')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pintrest')->nullable();
            $table->text('experience_text')->nullable();
            $table->text('experience_text_ar')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_descr')->nullable();
            $table->text('seo_descr_ar')->nullable();
            $table->string('photo')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
