<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStartAndEndTimeFromLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::table('lessons', function (Blueprint $table) {
    if (Schema::hasColumn('lessons', 'start_time')) {
        $table->dropColumn('start_time');
    }
    if (Schema::hasColumn('lessons', 'end_time')) {
        $table->dropColumn('end_time');
    }
});

    }
}
