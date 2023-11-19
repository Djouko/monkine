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

             // Migration pour la table annonce
        Schema::create('annonce', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('fichier')->nullable();
            $table->decimal('prix', 10, 2);
            $table->date('date_annonce');
            $table->foreignId('user_id')->constrained();
            // Utiliser unsignedBigInteger() ou foreignId()
            $table->unsignedBigInteger('categorie_id');
            // $table->foreignId('categorie_id')->constrained();
            $table->foreign('categorie_id')->references('id')->on('categorie');
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};
