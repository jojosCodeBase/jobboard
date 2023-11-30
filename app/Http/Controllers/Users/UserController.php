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
        $user = User::find(Auth::user()->id);
        return view('user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request){
        $userDetailsUpdate = User::find(Auth::user()->id);
        $profileImage = $userDetailsUpdate->profile_image;
        $cv = $userDetailsUpdate->cv;

       if($userDetailsUpdate->profile_image == NULL)
        {
            $destinationPath = 'assets/profile-images/';
            $profileImage = $request->profile_image->getClientOriginalName();
            $request->profile_image->move(public_path($destinationPath), $profileImage);
        }
        else if($request->hasFile('profile_image')){
            $destinationPath = 'assets/profile-images/';
            $profileImage = $request->profile_image->getClientOriginalName();
            $request->profile_image->move(public_path($destinationPath), $profileImage);
        }

        if($userDetailsUpdate->cv == NULL){
            $cvPath = 'assets/resume/';
            $cv = $request->cv->getClientOriginalName();
            $request->cv->move(public_path($cvPath), $cv);
        }
        else if($request->hasFile('cv')){
            $cvPath = 'assets/resume/';
            $cv = $request->cv->getClientOriginalName();
            $request->cv->move(public_path($cvPath), $cv);
        }

        $userDetailsUpdate->update([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'description' => $request->description,
            'profile_image' => $profileImage,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'facebook' => $request->social_media,
            'cv' => $cv,
        ]);

        if($userDetailsUpdate){
            return redirect()->route('profile')->with('success','User profile updated successfully !');
        }
        else{
            return redirect()->route('profile')->with('error', 'Some error occured in updating profile !!');
        }
    }
}
