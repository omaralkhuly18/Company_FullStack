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
        Schema::create('menu_manages', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name')->nullable(false);
            $table->string('menu_name_ar')->nullable(false);
            $table->string('identifier_name')->nullable(false);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_manages');
    }
};
