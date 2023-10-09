<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseManagerController extends Controller
{
    public function dashboard() {
        return view('backend.course_manager.dashboard');
    }

    public function courses() {
        return view('backend.course_manager.courses');
    }
}
