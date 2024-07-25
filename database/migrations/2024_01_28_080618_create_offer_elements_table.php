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
        Schema::create('offer_elements', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable(false);
            $table->string('item_ar')->nullable(false);
            $table->unsignedBigInteger('offer_id');
            $table->timestamps();

            $table->foreign('offer_id')
            ->references('id')->on('offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_elements');
    }
};
