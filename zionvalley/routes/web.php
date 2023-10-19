<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/admin.add_image_view', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_member_view', [AdminController::class, 'addview']);
Route::get('/registration_view', [AdminController::class, 'registered']);
Route::post('/upload_members', [AdminController::class, 'upload']);
Route::get('/home_view', [AdminController::class, 'homeview']);
Route::post('appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('message', [HomeController::class, 'message'])->name('message');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('community', [HomeController::class, 'community'])->name('community');
Route::get('project', [HomeController::class, 'project'])->name('project');
