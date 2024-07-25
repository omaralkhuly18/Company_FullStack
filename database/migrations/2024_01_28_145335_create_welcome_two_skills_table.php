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
        Schema::create('welcome_two_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->tinyInteger('percentage')->unsigned()->nallable(false);
            $table->string('name_ar')->nullable(false);
            $table->unsignedBigInteger('welcome_two_id');
            $table->timestamps();

            $table->foreign('welcome_two_id')
            ->references('id')->on('welcome_twos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcome_two_skills');
    }
};
