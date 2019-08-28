<?php


namespace App\Http\Repository\Eloquent;


use App\Teacher;

class TeacherRepository
{
    public function index(){
        return Teacher::all();
    }

}
