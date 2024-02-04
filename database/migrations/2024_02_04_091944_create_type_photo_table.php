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
        Schema::create('type_photo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->references('id')->on('types')->onDelete('cascade')->constrained();
            $table->foreignId('photo_id')->references('id')->on('photos')->onDelete('cascade')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_photo');
    }
};
