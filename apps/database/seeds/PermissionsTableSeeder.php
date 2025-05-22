<?php

use App\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {

         // Nonaktifkan foreign key constraints untuk sementara (jika ada relasi)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel permissions
        Permission::truncate();

        // Aktifkan kembali foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $permissions = [
            ['id' => '1', 'title' => 'user_management_access'],
            ['id' => '2', 'title' => 'permission_create'],
            ['id' => '3', 'title' => 'permission_edit'],
            ['id' => '4', 'title' => 'permission_show'],
            ['id' => '5', 'title' => 'permission_delete'],
            ['id' => '6', 'title' => 'permission_access'],
            ['id' => '7', 'title' => 'role_create'],
            ['id' => '8', 'title' => 'role_edit'],
            ['id' => '9', 'title' => 'role_show'],
            ['id' => '10', 'title' => 'role_delete'],
            ['id' => '11', 'title' => 'role_access'],
            ['id' => '12', 'title' => 'user_create'],
            ['id' => '13', 'title' => 'user_edit'],
            ['id' => '14', 'title' => 'user_show'],
            ['id' => '15', 'title' => 'user_delete'],
            ['id' => '16', 'title' => 'user_access'],
            ['id' => '17', 'title' => 'lesson_create'],
            ['id' => '18', 'title' => 'lesson_edit'],
            ['id' => '19', 'title' => 'lesson_show'],
            ['id' => '20', 'title' => 'lesson_delete'],
            ['id' => '21', 'title' => 'lesson_access'],
            ['id' => '22', 'title' => 'school_class_create'],
            ['id' => '23', 'title' => 'school_class_edit'],
            ['id' => '24', 'title' => 'school_class_show'],
            ['id' => '25', 'title' => 'school_class_delete'],
            ['id' => '26', 'title' => 'school_class_access'],
            ['id' => '27', 'title' => 'study_program_create'],
            ['id' => '28', 'title' => 'study_program_edit'],
            ['id' => '29', 'title' => 'study_program_show'],
            ['id' => '30', 'title' => 'study_program_delete'],
            ['id' => '31', 'title' => 'study_program_access'],
            ['id' => '32', 'title' => 'course_create'],
            ['id' => '33', 'title' => 'course_edit'],
            ['id' => '34', 'title' => 'course_show'],
            ['id' => '35', 'title' => 'course_delete'],
            ['id' => '36', 'title' => 'course_access'],
            ['id' => '37', 'title' => 'room_create'],
            ['id' => '38', 'title' => 'room_edit'],
            ['id' => '39', 'title' => 'room_show'],
            ['id' => '40', 'title' => 'room_delete'],
            ['id' => '41', 'title' => 'room_access'],
            ['id' => '42', 'title' => 'session_create'],
            ['id' => '43', 'title' => 'session_edit'],
            ['id' => '44', 'title' => 'session_show'],
            ['id' => '45', 'title' => 'session_delete'],
            ['id' => '46', 'title' => 'session_access'],
            ['id' => '47', 'title' => 'week_day_create'],
            ['id' => '48', 'title' => 'week_day_edit'],
            ['id' => '49', 'title' => 'week_day_show'],
            ['id' => '50', 'title' => 'week_day_delete'],
            ['id' => '51', 'title' => 'week_day_access'],
        ];

        Permission::insert($permissions);
    }
}
