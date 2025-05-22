<?php

use App\Lesson;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $lessons = [
            [
                'id'               => 1,
                'teacher_id'       => 8,
                'teaching_assistant_id' => 11, // No teaching assistant
                'class_id'         => 3,
                'weekday_id'       => 1,
                'session_id'       => 1, // Session ID instead of start_time/end_time
                'course_id'        => 14,
                'study_program_id' => 13,
                'year'             => 2025,
                'semester'         => 'genap',
                'room_id'          => 5,
            ],
            [
                'id'               => 2,
                'teacher_id'       => 8,
                'teaching_assistant_id' => 13,   //Teaching Assistant ID is present
                'class_id'         => 1,
                'weekday_id'       => 1,
                'session_id'       => 1,
                'course_id'        => 14,
                'study_program_id' => 14,
                  'year'             => 2024,
                  'semester'         => 'ganjil',
                'room_id'          => 5,
            ],
            [
                'id'               => 3,
                'teacher_id'       => 2,
                'teaching_assistant_id' => 13,
                'class_id'         => 1,
                'weekday_id'       => 3,
                'session_id'       => 1,
                'course_id'        => 14,
                'study_program_id' => 13,
                  'year'             => 2025,
                  'semester'         => 'genap',
                'room_id'          => 4,
            ],
            [
                'id'               => 4,
                'teacher_id'       => 2,
                'teaching_assistant_id' => 13,
                'class_id'         => 1,
                'weekday_id'       => 2,
                'session_id'       => 1,
                'course_id'        => 14,
                'study_program_id' => 13,
                  'year'             => 2025,
                  'semester'         => 'genap',
                'room_id'          => 4,
            ],
            [
                'id'               => 5,
                'teacher_id'       => 2,
                'teaching_assistant_id' => 13,
                'class_id'         => 2,
                'weekday_id'       => 4,
                'session_id'       => 1,
                'course_id'        => 14,
                'study_program_id' => 13,
                  'year'             => 2025,
                  'semester'         => 'genap',
                'room_id'          => 5,
            ],
            [
                'id'               => 6,
                'teacher_id'       => 3,
                'teaching_assistant_id' => 13,
                'class_id'         => 1,
                'weekday_id'       => 5,
                'session_id'       => 3,
                'course_id'        => 14,
                'study_program_id' => 13,
                  'year'             => 2025,
                  'semester'         => 'genap',
                'room_id'          => 4,
            ],
            [
                'id'               => 7,
                'teacher_id'       => 2,
                'teaching_assistant_id' => 13,
                'class_id'         => 1,
                'weekday_id'       => 1,
                'session_id'       => 1,
                'course_id'        => 14,
                'study_program_id' => 13,
                  'year'             => 2025,
                  'semester'         => 'genap',
                'room_id'          => 5,
            ],
        ];

        Lesson::insert($lessons);
    }
}
