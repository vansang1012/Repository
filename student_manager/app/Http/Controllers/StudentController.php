<?php

namespace App\Http\Controllers;

use App\Http\Service\Impl\StudentService;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $student = $this->studentService->index();
        return view('index', compact('student'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('student.index');

    }

    public function edit($id)
    {
        $student = Student::FindOrFail($id);

        return view('edit', compact('student'));

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $student = Student::find($id);

        $student->name = $request->name;
        $student->age = $request->age;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('student.index');


    }

    public function delete()
    {
        $id = $_GET['id'];
        //$student=Student::find($id);
        //$student->delete();

        Student::destroy($id);
        return redirect()->route('student.index');
    }
}
