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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->foreignId('id_user')->constrained(
                table: 'users',
                column: 'id_user'
            );
            $table->foreignId('id_sepeda')->constrained(
                table: 'sepeda',
                column: 'id_sepeda'
            );
            $table->integer('jumlah_pembelian');
            $table->integer('total_harga');
            $table->string('status_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
