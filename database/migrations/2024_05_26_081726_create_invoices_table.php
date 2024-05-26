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
        Schema::create('invoices', function (Blueprint $table) {
            $table->string('id', 5)->primary();
            $table->string('room_occupant_id', 3);
            $table->foreign('room_occupant_id')->references('id')->on('RoomOccupants')->onDelete('cascade');
            $table->enum('month', ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
            $table->year('year');
            $table->float('total');
            $table->enum('status', ['Belum Lunas', 'Lunas'])->default('Belum Lunas');
            $table->date('payment_date')->nullable();
            $table->boolean('notification_sent')->default(false);
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
