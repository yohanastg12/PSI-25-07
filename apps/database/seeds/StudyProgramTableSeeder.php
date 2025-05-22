<?php

use App\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramTableSeeder extends Seeder
{
    public function run()
    {
        $StudyProgram = [
            [
                'id'    => 1,
                'name' => 'S1 Informatika',
            ],
            [
                'id'    => 2,
                'name' => 'S1 Sistem Informasi',
            ],
            [
                'id'    => 3,
                'name' => 'S1 Teknik Elektro',
            ],
            [
                'id'    => 4,
                'name' => 'D4 Teknologi Rekayasa Perangkat Lunak',
            ],
            [
                'id'    => 5,
                'name' => 'S1 Teknik Bioproses',
            ],
            [
                'id'    => 6,
                'name' => 'S1 Manajemen Rekayasa',
            ],
            [
                'id'    => 7,
                'name' => 'D3 Teknologi Informasi',
            ],
            [
                'id'    => 8,
                'name' => 'D3 Teknologi Komputer',
            ],
            [
                'id'    => 9,
                'name' => 'S1 Teknik Metalurgi',
            ],
            
        ];

        StudyProgram::insert($StudyProgram);
    }
}
 