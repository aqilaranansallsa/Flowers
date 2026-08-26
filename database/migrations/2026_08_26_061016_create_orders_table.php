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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->string('invoice')->unique();

            $table->string('nama_penerima');
            $table->string('telp_penerima', 20);
            $table->text('alamat_pengiriman');
            $table->date('tanggal_pengiriman');
            $table->text('catatan')->nullable();

            $table->string('metode_pembayaran');
            $table->string('status_pembayaran')->default('menunggu');

            $table->decimal('total', 12, 2);

            $table->string('status')->default('menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};