<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_guest_id');
            $table->unsignedBigInteger('roomId');

            $table->string('type');
            $table->text('description');
            $table->timestamps();


            $table->foreign('user_guest_id')->references('id')->on('users_guests')->onDelete('cascade');
            $table->foreign('roomId')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}