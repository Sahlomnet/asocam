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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('street')->nullable();
            $table->string('ext_number')->nullable();
            $table->string('int_number')->nullable();
            $table->string('col')->nullable();
            $table->string('city')->nullable();
            $table->string('mun')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('zip_code')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
