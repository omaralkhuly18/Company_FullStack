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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('title_ar')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->text('descr')->nullable(false);
            $table->text('descr_ar')->nullable(false);
            $table->text('seo_title')->nullable();
            $table->text('seo_title_ar')->nullable();
            $table->text('seo_descr')->nullable();
            $table->text('seo_descr_ar')->nullable();
            $table->string('photo')->nullable(false);
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')->on('post_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
