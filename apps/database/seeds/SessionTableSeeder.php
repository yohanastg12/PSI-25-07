<?php

namespace Database\Seeders;

use App\Session;
use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            [
                'id' => 1,
                'start_time' => '08:00',
                'end_time' => '09:30',
            ],
            [
                'id' => 2,
                'start_time' => '09:30:00',
                'end_time' => '11:00:00',
            ],
            [
                'id' => 3,
                'start_time' => '11:00:00',
                'end_time' => '12:30:00',
            ],
            [
                'id' => 4,
                'start_time' => '13:00:00',
                'end_time' => '14:30:00',
            ],
        ];

        Session::insert($sessions);
    }
}
