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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string("nombremateria",200)->unique();
            $table->string("nombremediano",25)->unique();
            $table->string("nombrecorto",10)->unique();
            $table->string("nivel",1);
            $table->string("modalidad",1);
            $table->integer("semestre");
            $table->foreignId("reticula_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
