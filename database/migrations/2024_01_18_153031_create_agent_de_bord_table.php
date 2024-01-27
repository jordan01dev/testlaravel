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
        Schema::create('agent_de_bord', function (Blueprint $table) {
            $table->id();
            $table->String('nom_agent');
            $table->String('prenom_agent');
            $table->String('email_agent');
            $table->String('motDepasse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_de_bord');
    }
};
