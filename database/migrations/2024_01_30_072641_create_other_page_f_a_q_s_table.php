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
        Schema::create('other_page_f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('title_ar')->nullable(false);
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
        Schema::dropIfExists('other_page_f_a_q_s');
    }
};
