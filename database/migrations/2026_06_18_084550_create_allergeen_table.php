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
        Schema::create('Allergeen', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Naam', 50);
            $table->string('Omschrijving', 255);
            $table->dateTime('DatumGewijzigd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Allergeen');
    }
};
