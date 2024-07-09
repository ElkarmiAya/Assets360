<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collaborater', function (Blueprint $table) {
            $table->id('Matricule');
            $table->string('Lastname',50);
            $table->string('Firstname',50);
            $table->string('Email',100);
            $table->string('CIN',15);
            $table->date('Birthdate');
            $table->date('workstartdate');
            $table->date('workenddate')->nullable();
            $table->string('Adress',255);
            $table->foreign('workjob_id')->references('id')->on('workjobs');

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborater');
    }
};
