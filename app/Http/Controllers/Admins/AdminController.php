<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    // public function logout(){
    //     dd("logged out");
    // }

    public function dashboard(){
        //$user = Auth::guard('admin')->user();
        return view('admin.dashboard');
    }

    public function checkLogin(Request $request){
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'Invalid login credentials !']);
    }

    public function jobs(){
        return view('admin.jobs');
    }
    public function categories(){
        return view('admin.categories');
    }
    public function applications(){
        return view('admin.applications');
    }
    public function listAdmins(){
        return view('admin.admins');
    }
    public function createAdmin(){
        return view('admin.createAdmin');
    }
}
