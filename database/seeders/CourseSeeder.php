<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'course_code' => 'BSIT',
                'course_name' => 'Bachelor of Science in Information Technology',
                'description' => 'Focuses on software development, networking, databases, and information systems.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_code' => 'BSMB',
                'course_name' => 'Bachelor of Science in Marine Biology',
                'description' => 'Focuses on marine organisms, ecosystems, and coastal resource studies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_code' => 'BSA',
                'course_name' => 'Bachelor of Science in Agriculture',
                'description' => 'Focuses on agriculture, farm management, and sustainable farming.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}