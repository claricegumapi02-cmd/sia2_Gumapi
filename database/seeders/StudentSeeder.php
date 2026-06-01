<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'student_no' => '2023-0001',
                'full_name' => 'Clarice R. Gumapi',
                'course' => 'BSIT',
                'year_level' => '3rd Year',
                'email' => 'clarice.gumapi@slsu.edu.ph',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_no' => '2023-0002',
                'full_name' => 'James P. Cabillada',
                'course' => 'BSIT',
                'year_level' => '3rd Year',
                'email' => 'james.cabillada@slsu.edu.ph',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_no' => '2023-0003',
                'full_name' => 'April Grace B. Aton',
                'course' => 'BSIT',
                'year_level' => '3rd Year',
                'email' => 'april.aton@slsu.edu.ph',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}