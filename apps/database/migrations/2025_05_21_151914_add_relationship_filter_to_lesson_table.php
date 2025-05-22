<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFilterToLessonTable extends Migration
{
    //  public function up()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         if (!Schema::hasColumn('lessons', 'year')) {
    //             $table->year('year')->nullable();
    //         }

    //         if (!Schema::hasColumn('lessons', 'semester')) {
    //             $table->tinyInteger('semester', ['Ganjil', 'Genap'])->nullable();
    //         }
    //     });
    // }

    // public function down()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         if (Schema::hasColumn('lessons', 'year')) {
    //             $table->dropColumn('year');
    //         }

    //         if (Schema::hasColumn('lessons', 'semester')) {
    //             $table->dropColumn('semester');
    //         }
    //     });
    // }
}
