<?php


namespace App\Http\Service\Impl;


use App\Http\Repository\Contracts\StudentRepositoryInterface;
use App\Http\Service\StudentServiceInterface;

class StudentService implements StudentServiceInterface
{
    public $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        return $this->studentRepository->index();
    }
}
