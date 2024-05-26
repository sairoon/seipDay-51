<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $students=[];
    public function home(){
        $this->students = Student::all();
        return view('front.home.home',[
            'students' => $this->students,
        ]);
    }
}
