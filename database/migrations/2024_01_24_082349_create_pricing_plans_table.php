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
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('price')->nullable(false);
            $table->string('period')->nullable(false);
            $table->text('btn_text')->nullable(false);
            $table->text('btn_text_ar')->nullable(false);
            $table->string('btn_url')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
