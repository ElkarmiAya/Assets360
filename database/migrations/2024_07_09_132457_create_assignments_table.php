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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->date('assignment_date');
            $table->date('decommissioning_date')->nullable();
            $table->integer('demandeur');
            $table->integer('validateur');
            $table->integer('stockasset_id');
            $table->foreign('demandeur')->references('id')->on('collaboraters');
            $table->foreign('validateur')->references('id')->on('collaboraters');
            $table->foreign('stockasset_id')->references('id')->on('assets_stocks');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
