<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Nonaktifkan foreign key constraints untuk sementara (jika ada relasi)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        
        SchoolClass::truncate();

        // Aktifkan kembali foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

       $SchoolClasses = [
            [
                'id'    => 1,
                'name' => '11SI',
            ],
            [
                'id'    => 2,
                'name' => '12SI',
            ],
            [
                'id'    => 3,
                'name' => '13SI',
            ],
            [
                'id'    => 4,
                'name' => '14SI',
            ],
            [
                'id'    => 5,
                'name' => '11TE',
            ],
            [
                'id'    => 6,
                'name' => '12TE',
            ],
            [
                'id'    => 7,
                'name' => '13TE',
            ],
            [
                'id'    => 8,
                'name' => '14TE',
            ],
            [
                'id'    => 9,
                'name' => '31TI',
            ],
            [
                'id'    => 10,
                'name' => '32TI',
            ],
            [
                'id'    => 11,
                'name' => '33TI',
            ],
            [
                'id'    => 12,
                'name' => '11MR',
            ],
            [
                'id'    => 13,
                'name' => '12MR',
            ],
            [
                'id'    => 14,
                'name' => '13MR',
            ],
            [
                'id'    => 15,
                'name' => '14MR',
            ],
            [
                'id'    => 16,
                'name' => '11TM',
            ],
            [
                'id'    => 17,
                'name' => '12TM',
            ],
            [
                'id'    => 18,
                'name' => '13TM',
            ],
            [
                'id'    => 19,
                'name' => '14TM',
            ],
            [
                'id'    => 20,
                'name' => '31TK',
            ],
            [
                'id'    => 21,
                'name' => '32TK',
            ],
            [
                'id'    => 22,
                'name' => '33TK',
            ],
            [
                'id'    => 23,
                'name' => '11TB',
            ],
            [
                'id'    => 24,
                'name' => '12TB',
            ],
            [
                'id'    => 25,
                'name' => '13TB',
            ],
            [
                'id'    => 26,
                'name' => '14TB',
            ],
            [
                'id'    => 27,
                'name' => '41TRPL',
            ],
            [
                'id'    => 28,
                'name' => '42TRPL',
            ],
            [
                'id'    => 29,
                'name' => '43TRPL',
            ],
            [
                'id'    => 30,
                'name' => '44TRPL',
            ],
        ];
        SchoolClass::insert($SchoolClasses);
    }
}
    

