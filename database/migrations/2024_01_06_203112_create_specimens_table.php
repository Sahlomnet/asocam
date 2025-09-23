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
        Schema::create('specimens', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('registry')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('chip')->nullable();
            $table->date('birthdate')->nullable();
            $table->foreignId('sex_id');
            $table->foreignId('color_id');
            $table->foreignId('category_id');
            $table->foreignId('breeder_id')->nullable();
            $table->string('father_code')->nullable();
            $table->string('mother_code')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();

            $table->foreign('sex_id')
                ->references('id')
                ->on('sexes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('breeder_id')
                ->references('id')
                ->on('breeders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specimens');
    }
};
