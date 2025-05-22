<?php

use App\WeekDay;
use Illuminate\Database\Seeder;

class WeekdayTableSeeder extends Seeder
{
    public function run()
    {
        $weekday_id = [
            [
                'id'    => 1,
                'name' => 'Senin',
            ],
            [
                'id'    => 2,
                'name' => 'Selasa',
            ],
            [
                'id'    => 3,
                'name' => 'Rabu',
            ],
            [
                'id'    => 4,
                'name' => 'Kamis',
            ],
            [
                'id'    => 5,
                'name' => 'Jumat',
            ],
            
        ];

        WeekDay::insert($weekday_id);
    }
}
 