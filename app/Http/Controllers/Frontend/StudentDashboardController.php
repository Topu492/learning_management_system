<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class StudentDashboardController extends Controller
{
    function index() : View {
        
        
        return view('frontend.student-dashboard.index');
    }

     function becomeInstructor() : View {
       if(auth()->user()->role == 'instructor') abort(403);

       return view('frontend.student-dashboard.become-instructor.index'); 
    }

}
