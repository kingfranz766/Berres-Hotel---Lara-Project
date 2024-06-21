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
        Schema::create('reservation_transaction', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->string('chosen_services')->default('no service chosen');
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
            $table->decimal('TotalCost', total: 9, places: 2);
            $table->date('ReservationDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_transaction');
    }
};
