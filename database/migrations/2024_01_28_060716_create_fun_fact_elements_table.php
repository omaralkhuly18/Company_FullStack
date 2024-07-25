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
        Schema::create('fun_fact_elements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->string('number')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->unsignedBigInteger('fun_id');
            $table->timestamps();

            $table->foreign('fun_id')
            ->references('id')->on('fun_facts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fun_fact_elements');
    }
};
