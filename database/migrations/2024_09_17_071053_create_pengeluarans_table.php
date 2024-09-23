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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'id_user');
            $table->string(column: 'judul_pengeluaran', length: 75);
            $table->text(column: 'deskripsi');
            $table->unsignedBigInteger(column: 'nominal');
            $table->timestamps();

            $table->foreign(columns: 'id_user')->references(columns: 'id')->on(table: 'users')->onDelete(action: 'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
