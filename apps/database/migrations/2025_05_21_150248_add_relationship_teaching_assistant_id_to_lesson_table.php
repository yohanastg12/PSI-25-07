<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipTeachingAssistantIdToLessonTable extends Migration
{
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (!Schema::hasColumn('lessons', 'teaching_assistant_id')) {
                $table->unsignedInteger('teaching_assistant_id')->nullable()->after('teacher_id');
                // $table->foreign('teaching_assistant_id')->references('id')->on('users')->onDelete('set null');
            }
        });
    }
    
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (Schema::hasColumn('lessons', 'teaching_assistant_id')) {
                // $table->dropForeign(['teaching_assistant_id']);
                $table->dropColumn('teaching_assistant_id');
            }
        });
    }
}
