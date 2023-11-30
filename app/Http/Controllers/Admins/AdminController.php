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

    public function dashboard(){
        $user = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('user'));
    }

    public function checkLogin(Request $request){
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'Invalid login credentials !']);
    }
}
