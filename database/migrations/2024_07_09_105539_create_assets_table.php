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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('description',45);
            $table->string('INternal_code',45);
            $table->tinyInteger('Type');
            $table->integer('Quantity');
            $table->integer('Available');
            $table->integer('In_progress');
            $table->integer('Out_of_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
