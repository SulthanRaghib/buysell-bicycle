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
        Schema::create('sepeda', function (Blueprint $table) {
            $table->id('id_sepeda');
            $table->string('merek_sepeda');
            $table->string('deskripsi_sepeda');
            $table->integer('harga_sepeda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepeda');
    }
};
