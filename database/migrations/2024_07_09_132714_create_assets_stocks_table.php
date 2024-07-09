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
        Schema::create('assets_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('code',50);
            $table->tinyInteger('situation')->default(0);
            $table->string('serial_number',100);
            $table->foreign('asset_id')->references('id')->on('assets');
            $table->foreign('entry_id')->references('id')->on('entries');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets_stocks');
    }
};
