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
        Schema::create('service_f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable(false);
            $table->string('question_ar')->nullable(false);
            $table->text('answer')->nullable(false);
            $table->text('answer_ar')->nullable(false);
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('service_id')
            ->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_f_a_q_s');
    }
};
