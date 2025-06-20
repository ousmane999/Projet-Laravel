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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('numero_compte')->unique();
            $table->string('code_banque', 5);
            $table->string('code_guichet', 5);
            $table->string('cle_rib', 2);
            $table->decimal('solde', 10, 2)->default(0);
            $table->enum('type', ['courant', 'epargne']);
            $table->enum('statut', ['actif', 'en_attente', 'rejete', 'cloture'])->default('en_attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
