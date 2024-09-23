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
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nama', length: 50);
            $table->string(column: 'instansi', length: 35);
            $table->unsignedBigInteger(column: 'nominal');
            $table->text(column: 'bukti_bayar');
            $table->boolean(column: 'is_valid')->default(value: false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukans');
    }
};
