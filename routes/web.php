<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Project;

Route::get('/', function () {
    $projects = Project::all();
    return view('home', compact('projects'));
});

Auth::routes();

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');
