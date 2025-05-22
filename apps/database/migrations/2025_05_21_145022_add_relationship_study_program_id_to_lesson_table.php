<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipStudyProgramIdToLessonTable extends Migration
{
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (!Schema::hasColumn('lessons', 'study_program_id')) {
                $table->unsignedBigInteger('study_program_id')->nullable()->after('class_id');
                
            }
        });
    }

    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            // $table->dropForeign(['study_program_id']);
            $table->dropColumn('study_program_id');
        });
    }
}
