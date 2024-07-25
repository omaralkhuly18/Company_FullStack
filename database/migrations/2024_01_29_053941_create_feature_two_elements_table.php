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
        Schema::create('feature_two_elements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('name_ar')->nullable(false);
            $table->unsignedBigInteger('feature_two_id');
            $table->timestamps();

            $table->foreign('feature_two_id')
            ->references('id')->on('welcome_twos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_two_elements');
    }
};
