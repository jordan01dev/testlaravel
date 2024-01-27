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
        Schema::create('commande_tickets', function (Blueprint $table) {
            $table->id();
            $table->String('type_tickets');
            $table->String('nbre_ticket_repas');
            $table->String('nbre_ticket_petitdej');
            $table->unsignedBigInteger('idUtilisateur');
            $table->foreign('idUtilisateur')->references('id')->on('utilisateur')->onDelete('cascade');
            $table->unsignedBigInteger('idAgentDebord');
            $table->foreign('idAgentDebord')->references('id')->on('agent_de_bord')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_tickets');
    }
};
