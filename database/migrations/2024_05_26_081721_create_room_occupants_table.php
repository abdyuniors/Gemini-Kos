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
        Schema::create('room_occupants', function (Blueprint $table) {
            $table->string('id', 3)->primary();
            $table->string('room_id', 3);
            $table->foreign('room_id')->references('id')->on('Rooms')->onDelete('cascade');
            $table->string('occupant_id', 3);
            $table->foreign('occupant_id')->references('id')->on('Occupants')->onDelete('cascade');
            $table->date('entry_date');
            $table->date('exit_date')->nullable();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_occupants');
    }
};
