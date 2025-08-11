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
        Schema::create('specimen_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('specimen_id');
            $table->timestamps();

            $table->foreign('specimen_id')
                ->references('id')
                ->on('specimens')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specimen_img');
    }
};
