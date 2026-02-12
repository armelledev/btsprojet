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
        Schema::create('presnces', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->constrained()->onDelete('cascade');
            $table->date('date_jour');
             $table->date('heure_arrivee')->nullable();
              $table->date('heure_depart')->nullable();
              $table->string('statut')->default('present');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presnces');
    }
};
