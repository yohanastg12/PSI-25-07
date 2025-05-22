<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{

        public function up()
        {
            Schema::create('lessons', function (Blueprint $table) {
                $table->increments('id');
                $table->foreignId('session_id');
                $table->foreignId('class_id');
                $table->foreignId('teacher_id');
                $table->unsignedSmallInteger('year');
                $table->string('semester');
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('lessons');
        }
    }
    
