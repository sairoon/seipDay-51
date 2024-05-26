<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students, $student;
    public function create(){
        return view('front.student.create');
    }
    public function index(){
        $this->students = Student::all();
        return view('front.student.index',[
            'students' => $this->students,
            ]);
    }
    public function store(Request $request){
        Student::createStudent($request);
        return back()->with('success', 'Student Created Successfully.');
    }
    public function destroy($studentId){
        $this->student = Student::find($studentId);
        if (file_exists($this->student->image)){
            unlink($this->student->image);
        }
        $this->student->delete();
        return back()->with('success', 'Student Delete Successfully');
    }
    public function editStudent($id){
        $this->student = Student::find($id);
        return view('front.student.edit',[
            'student' => $this->student,
        ]);
    }
    public function updateStudent(Request $request, $id){
        Student::updateStudent($request, $id);
        return redirect('/manage-student')->with('success', 'Student Update Successfully.');
    }
    public function details($id){
        $this->student = Student::find($id);
        return view('front.student.details',[
            'student' => $this->student,
        ]);
    }
}
