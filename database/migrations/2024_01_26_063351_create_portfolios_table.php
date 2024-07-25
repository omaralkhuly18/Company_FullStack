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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('slug_ar')->nullable(false);
            $table->text('descr')->nullable(false);
            $table->text('descr_ar')->nullable(false);
            $table->string('date')->nullable();
            $table->string('client')->nullable();
            $table->string('client_ar')->nullable();
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->string('location_ar')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->string('seo_descr')->nullable();
            $table->string('seo_descr_ar')->nullable();
            $table->string('photo')->nullable(false);
            $table->string('banner')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
