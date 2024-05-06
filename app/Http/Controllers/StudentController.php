<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function dashboard()
    {
        return view('auth.student.dashboard');
    }

    public function profile()
    {
        return view('auth.student.profile');
    }

    public function courses()
    {
        return view('auth.student.courses');
    }

    public function course()
    {
        return view('auth.student.course');
    }

    public function courseContent()
    {
        return view('auth.student.course-content');
    }

    public function courseContentDetail()
    {
        return view('auth.student.course-content-detail');
    }

    public function courseContentDetailQuiz()
    {
        return view('auth.student.course-content-detail-quiz');
    }

    public function courseContentDetailQuizResult()
    {
        return view('auth.student.course-content-detail-quiz-result');
    }

    public function courseContentDetailAssignment()
    {
        return view('auth.student.course-content-detail-assignment');
    }

    public function courseContentDetailAssignmentResult()
    {
        return view('auth.student.course-content-detail-assignment-result');
    }

}
