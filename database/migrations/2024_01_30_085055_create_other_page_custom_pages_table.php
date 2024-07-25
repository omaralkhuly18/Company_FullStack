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
        Schema::create('other_page_custom_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->text('content')->nullable(false);
            $table->text('content_ar')->nullable(false);
            $table->string('seo_title');
            $table->string('seo_title_ar');
            $table->text('seo_descr');
            $table->text('seo_descr_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_page_custom_pages');
    }
};
