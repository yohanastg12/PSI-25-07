<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipRoomIdToLessonTable extends Migration
{
   public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (!Schema::hasColumn('lessons', 'room_id')) {
                $table->unsignedBigInteger('room_id')->nullable()->after('weekday_id');

                // $table->foreign('room_id')
                //       ->references('id')->on('room')
                //       ->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (Schema::hasColumn('lessons', 'room_id')) {
                // $table->dropForeign(['room_id']);
                $table->dropColumn('room_id');
            }
        });
    }
}
