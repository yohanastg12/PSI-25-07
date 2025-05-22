<?php

use App\StudyProgram;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SchoolClassesTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            LessonsTableSeeder::class,
            CourseTableSeeder::class,
            RoomTableSeeder::class,
            StudyProgramTableSeeder::class,
            WeekdayTableSeeder::class,
            SessionTableSeeder::class,
        ]);
    }
}
