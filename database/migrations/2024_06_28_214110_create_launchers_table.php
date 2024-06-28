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
        Schema::create('launchers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('Name of the launcher');
            $table->unsignedBigInteger('agency_id');
            $table->foreign('agency_id')->references('id')->on('agencies');
            $table->string('description', 255)->nullable()->comment('Description of the launcher');
            $table->boolean('status')->default(true)->comment('Status of the launcher (active or not)');
            $table->unsignedBigInteger('price')->nullable()->comment('Price of the launcher');
            $table->integer('diameter')->comment('Diameter of the launcher');
            $table->integer('height')->comment('Height of the launcher');
            $table->integer('LEO')->comment('LEO of the launcher');
            $table->integer('GTO')->comment('GTO of the launcher');
            $table->integer('stage')->comment('Number of stages');
            $table->integer('liftoff_thrust')->comment('Liftoff thrust of the launcher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('launchers');
    }
};
