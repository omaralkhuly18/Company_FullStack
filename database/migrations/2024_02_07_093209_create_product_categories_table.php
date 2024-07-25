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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->string('seo_title')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_descr')->nullable();
            $table->text('seo_descr_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
