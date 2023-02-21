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
        Schema::create('lembaga_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreign('profile_id')
            ->references('id')
            ->on('desa_profiles')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga_structures');
    }
};
