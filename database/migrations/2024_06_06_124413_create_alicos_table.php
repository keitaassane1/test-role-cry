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
        Schema::create('alicos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->integer('echantillon_id');
            $table->integer('congelateur_id');
            $table->string('numrack')->nullable();
            $table->integer('numboite')->nullable();
            $table->integer('posboite')->nullable();
            $table->string('volume')->nullable();
            $table->date('dateprelev')->nullable();
            $table->longText('observ')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alicos');
    }
};
