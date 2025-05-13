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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table-> string('description', 100)->comment('descrpcion');
            $table-> integer('hours')->comment('horas de duracion');
            $table->foreignId('technician_id')->constrained('technician')
                                                ->onDelete('cascade')->onUpdate('cascade')->comment('id del tecnico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
