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
        Schema::create('mission_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('launcher_id');
            $table->foreign('launcher_id')->references('id')->on('launchers');
            $table->integer('count_mission');
            $table->integer('mission_succes');
            $table->integer('mission_failure');
            $table->integer('mission_partial_failure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions_data');
    }
};
