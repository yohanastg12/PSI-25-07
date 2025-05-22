<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
     public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes(); // Untuk fitur soft delete
        });
    }

    public function down()
    {
        Schema::dropIfExists('room');
    }
}
