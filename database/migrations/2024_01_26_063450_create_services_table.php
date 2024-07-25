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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->text('short_descr')->nullable(false);
            $table->text('short_descr_ar')->nullable(false);
            $table->text('descr')->nullable(false);
            $table->text('descr_ar')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->string('phone')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_descr')->nullable();
            $table->text('seo_descr_ar')->nullable();
            $table->string('photo')->nullable(false);
            $table->string('banner')->nullable();
            $table->string('pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
