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
            $table->unsignedBigInteger('user_guest_id');
            $table->unsignedBigInteger('roomNumber');

            $table->string('type');
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_guest_id')->references('id')->on('users_guests')->onDelete('cascade');
            $table->foreign('roomNumber')->references('roomNumber')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
