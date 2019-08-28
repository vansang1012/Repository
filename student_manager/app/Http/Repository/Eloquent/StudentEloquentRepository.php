<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\StudentRepositoryInterface;
use App\Student;

class StudentEloquentRepository implements StudentRepositoryInterface
{

    public function index()
    {
        return Student::all();
    }

}
