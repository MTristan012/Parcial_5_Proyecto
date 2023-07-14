<?php

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
    return view('items');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/statistics', function () {
    return view('statistics');
});


/*
// Create
Route::post('admin/adminTeachers/create', [UserController::class, 'create'])->name('userTeachers.create');

// Read
Route::get('admin/adminTeachers', function () {
    $users = User::where('permission', 2)->get();
    $courses = Course::where('teacher', '')->orWhereNull('teacher')->get();

    return view('admin/adminTeachers', compact('users','courses'));
});

// Update
Route::post('admin/adminTeachers', [UserController::class, "update"])->name("userTeachers.update");

// Delete
Route::post('admin/adminTeachers/delete', [UserController::class, "delete"])->name("userTeachers.delete");
*/