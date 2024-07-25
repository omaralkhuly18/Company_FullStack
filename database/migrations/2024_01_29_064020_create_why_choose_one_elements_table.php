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
        Schema::create('why_choose_one_elements', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable(false);
            $table->text('heading_ar')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->unsignedBigInteger('choose_one_id');
            $table->timestamps();

            $table->foreign('choose_one_id')
            ->references('id')->on('why_choose_ones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_one_elements');
    }
};
