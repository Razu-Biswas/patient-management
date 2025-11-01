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
    Schema::create('patients', function (Blueprint $table) {
    $table->id();
    $table->string('user')->nullable(); // now optional
    $table->string('name');
    $table->integer('age');
    $table->string('gender');
    $table->string('phone')->nullable();
    $table->text('address')->nullable();
    $table->string('disease')->nullable();
    $table->date('admission_date')->nullable();
    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
