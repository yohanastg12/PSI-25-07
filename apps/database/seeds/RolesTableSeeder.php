<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {

                 // Nonaktifkan foreign key constraints untuk sementara (jika ada relasi)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel permissions
        Role::truncate();

        // Aktifkan kembali foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'BAA',
            ],
            [
                'id'    => 3,
                'title' => 'Lecturer',
            ],
            [
                'id'    => 4,
                'title' => 'Student',
            ],
            [
                'id'    => 5,
                'title' => 'Teaching Assistant',
            ],
            
        ];

        Role::insert($roles);
    }
}
 