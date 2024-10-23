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
        Schema::create('cheffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('speciality');
            $table->string('nationality');
            $table->string('experience');
            $table->string('email');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cheffs');
    }
};
