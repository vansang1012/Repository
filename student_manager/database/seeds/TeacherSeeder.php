<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $teacher = new Teacher();
            $data = [
                'name' => str_random(10),
                'age' => mt_rand(10, 15)
            ];
            $teacher->create($data);
        }
    }
}
