<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipCourseIdToLessonTable extends Migration
{
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (!Schema::hasColumn('lessons', 'course_id')) {
                $table->unsignedBigInteger('course_id')->nullable()->after('class_id');

                // $table->foreign('course_id')->references('id')->on('course')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            // $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');
        });
    }
}
