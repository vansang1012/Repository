<?php

use App\Student;
use Illuminate\Database\Seeder;

class CreateStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++){
            $student = new Student();
            $data =[
                'name' => str_random(10),
                'age' => mt_rand(10, 15),
                'email'=>str_random(50)
            ];
            $student->create($data);
        }
    }
}
