<?php


namespace App\Http\Service\Impl;


use App\Http\Repository\Eloquent\TeacherRepository;
use App\Http\Service\TeacherServiceInterface;

class TeacherService implements TeacherServiceInterface
{
    protected $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository=$teacherRepository;
    }

    public function index()
    {
        return $this->teacherRepository->index();
    }
}
