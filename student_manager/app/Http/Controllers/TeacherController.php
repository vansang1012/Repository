<?php

namespace App\Http\Controllers;

use App\Http\Service\Impl\TeacherService;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacherSevice;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherSevice = $teacherService;
    }

    public function index()
    {
        $teacher = $this->teacherSevice->index();
        return view('teacher.index', compact('teacher'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->age = $request->age;
        $teacher->save();
        return redirect()->route('teacher.index');

    }

    public function update($id)
    {
        $teacher = Teacher::FindOrFail($id);
        return view('teacher.update', compact('teacher'));
    }

    public function edit(Request $request)
    {

        $teacher = Teacher::Find($request->id);
        $teacher->name = $request->name;
        $teacher->age = $request->age;
        $teacher->save();
        return redirect()->route('teacher.index');

    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
