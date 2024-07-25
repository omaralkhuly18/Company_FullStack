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
        Schema::create('welcome_one_elements', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(false);
            $table->string('heading_ar')->nullable(false);
            $table->text('text')->nullable(false);
            $table->text('text_ar')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->unsignedBigInteger('welcome_one_id');
            $table->timestamps();

            $table->foreign('welcome_one_id')
            ->references('id')->on('welcome_ones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcome_one_elements');
    }
};
