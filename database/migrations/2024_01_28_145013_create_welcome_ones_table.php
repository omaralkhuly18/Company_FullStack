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
        Schema::create('welcome_ones', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(false);
            $table->string('heading_ar')->nullable(false);
            $table->string('sub_heading')->nullable(false);
            $table->string('sub_heading_ar')->nullable(false);
            $table->text('text')->nullable(false);
            $table->text('text_ar')->nullable(false);
            $table->string('btn_text')->nullable(false);
            $table->string('btn_text_ar')->nullable(false);
            $table->string('btn_url')->nullable(false);
            $table->string('experience_year')->nullable(false);
            $table->string('person_name')->nullable(false);
            $table->string('person_name_ar')->nullable(false);
            $table->string('person_designation')->nullable(false);
            $table->string('person_designation_ar')->nullable(false);
            $table->string('person_photo')->nullable(false);
            $table->string('photo1')->nullable(false);
            $table->string('photo2')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcome_ones');
    }
};
