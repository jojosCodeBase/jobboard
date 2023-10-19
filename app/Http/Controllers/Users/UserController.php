<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Models\Job\Job;
use App\Models\Applications;
use App\Models\Job\savedJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
    public function applications(){
        $user = Auth::user();
        $applications = Applications::where('user_id', Auth::user()->id)->get();
        return view('user.applications', compact('user', 'applications'));
    }
    public function saved_jobs(){
        $user = Auth::user();
        $jobs = savedJob::where('user_id', Auth::user()->id)->get();
        return view('user.saved_jobs', compact('user', 'jobs'));
    }

    public function editProfile(){
        $user = Auth::user();
        return view('user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request){
        $update = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'profile_image' => $request->profile_image,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'facebook' => $request->social_media,
        ]);

        if($update){
            return redirect()->route('editProfile')->with('success','USer profile updated successfully !');
        }
        else{
            return redirect()->route('editProfile')->with('error', 'Some error occured in updating profile !!');
        }
    }
}
