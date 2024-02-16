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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique();
            $table->foreignId('type_id')->references('id')->on('types')->onDelete('cascade')->constrained();
            $table->boolean('dispenser')->default(false);
            $table->boolean('magic_jar')->default(false);
            $table->boolean('rak_piring')->default(false);
            $table->boolean('alat_makan')->default(false);
            $table->boolean('meja_makan')->default(false);
            $table->boolean('dapur')->default(false);
            $table->boolean('living_room')->default(false);
            $table->boolean('microwave')->default(false);
            $table->boolean('kulkas')->default(false);
            $table->boolean('shower')->default(false);
            $table->boolean('waterheater')->default(false);
            $table->boolean('wastafel')->default(false);
            $table->boolean('closet')->default(false);
            $table->boolean('bathtub')->default(false);
            $table->boolean('ac')->default(false);
            $table->boolean('tv')->default(false);
            $table->integer('single_bed')->default('0');
            $table->integer('king_bed')->default('0');
            $table->integer('queen_bed')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
