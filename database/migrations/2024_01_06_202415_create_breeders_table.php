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
        Schema::create('breeders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('membership')->nullable();
            $table->string('name')->nullable();
            $table->string('tel_01')->nullable();
            $table->string('tel_02')->nullable();
            $table->string('mail')->nullable();
            $table->foreignId('address_id')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();

            $table->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeders');
    }
};
