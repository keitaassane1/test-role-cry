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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->integer('etude_id');
            $table->integer('agent_id');
            $table->string('nature')->nullable();
            $table->string('tempconserv');
            $table->string('temparriv');
            $table->date('datedebut');
            $table->date('datefin');
            $table->date('lieuprelev');
            $table->longText('observ')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes');
    }
};
