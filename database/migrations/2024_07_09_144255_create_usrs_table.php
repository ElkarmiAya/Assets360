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
        Schema::create('usrs', function (Blueprint $table) {
            $table->id();
            $table->string('Username',100)->unique();
            $table->string('Password');
            $table->boolean('Active')->default(true);//a verifier
            
            $table->integer('collaborater_id');
            $table->integer('role_id');
            $table->foreign('collaborater_id')->references('id')->on('collaboraters');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usrs');
    }
};
