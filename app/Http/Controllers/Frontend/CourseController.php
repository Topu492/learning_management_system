<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CourseController extends Controller
{
     function index(): View
    {
       //courses = Course::where('instructor_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('frontend.instructor-dashboard.course.index');
    }
}
