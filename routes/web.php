<?php
// use AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admins\AdminController;
use App\Models\Admin\Admin;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); // this is for login and register

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/single/{id}', [App\Http\Controllers\Jobs\JobController::class, 'single'])->name('single.job');
Route::post('/jobs/save', [App\Http\Controllers\Jobs\JobController::class, 'saveJob'])->name('job.save');

Route::post('/jobs/apply', [App\Http\Controllers\Jobs\JobController::class, 'applyJob'])->name('job.apply');

Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/user/applications', [UserController::class, 'applications'])->name('applications');
Route::get('/user/saved-jobs', [UserController::class, 'saved_jobs'])->name('jobs.saved');

Route::get('/user/edit-profile', [UserController::class, 'editProfile'])->name('editProfile');
Route::post('/user/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::post('/job/search', [JobController::class, 'searchJob'])->name('job.search');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'checkLogin'])->name('admin.checkLogin');

Route::get('admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
