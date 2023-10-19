<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobController;
use App\Http\Controllers\Users\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
