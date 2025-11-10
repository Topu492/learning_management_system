<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Traits\FileUpload;

use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    use FileUpload;

    function index() : View {
       return view('frontend.student-dashboard.profile.index'); 
    }


     function profileUpdate(ProfileUpdateRequest $request) : RedirectResponse {
        $user = Auth::user();

        if($request->hasFile('avatar')) {
            $avatarPath = $this->uploadFile($request->file('avatar'));
            $this->deleteFile($user->image);
            $user->image = $avatarPath;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->about;
        $user->headline = $request->heading;
        $user->gender = $request->gender;
        $user->save();

       

        return redirect()->back();
    }
}
