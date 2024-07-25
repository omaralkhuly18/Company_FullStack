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
        Schema::create('feature_one_elements', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(false);
            $table->string('heading_ar')->nullable(false);
            $table->text('text')->nullable(false);
            $table->text('text_ar')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->unsignedBigInteger('feature_one_id');
            $table->timestamps();

            $table->foreign('feature_one_id')
            ->references('id')->on('feature_ones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_one_elements');
    }
};
