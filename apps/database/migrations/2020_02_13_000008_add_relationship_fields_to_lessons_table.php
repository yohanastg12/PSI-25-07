<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLessonsTable extends Migration
{
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            if (!Schema::hasColumn('lessons', 'teacher_id')) {
                $table->unsignedInteger('teacher_id');
            }
            if (!Schema::hasColumn('lessons', 'class_id')) {
                $table->unsignedInteger('class_id');
            }
        });
    }
    
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('teacher_fk_1001496');
            $table->dropColumn('teacher_id');
            $table->dropForeign('class_fk_1001508');
            $table->dropColumn('class_id');
        });
    }
}
