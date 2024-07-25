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
        Schema::create('why_choose_twos', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(false);
            $table->string('heading_ar')->nullable(false);
            $table->string('subheading')->nullable(false);
            $table->string('subheading_ar')->nullable(false);
            $table->text('photo_over_text')->nullable(false);
            $table->text('photo_over_text_ar')->nullable(false);
            $table->string('photo_over_heading')->nullable(false);
            $table->string('photo_over_heading_ar')->nullable(false);
            $table->string('photo')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_twos');
    }
};