<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
//use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//Route::get('/admin', function () {
//    return view('admin.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');

//Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');


Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function (){
    // کاربران
    Route::resource('/users', UserController::class)->except(['show']);
    Route::resource('/menu', MenuController::class)->except('show');
    Route::resource('/sections', SectionController::class)->except('show');
});

require __DIR__.'/auth.php';
