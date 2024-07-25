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
        Schema::create('team_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nallable(false);
            $table->string('name_ar')->nallable(false);
            $table->tinyInteger('percentage')->unsigned()->nallable(false);
            $table->unsignedBigInteger('member_id');
            $table->timestamps();

            $table->foreign('member_id')
            ->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_experiences');
    }
};
