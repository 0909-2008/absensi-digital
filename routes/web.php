<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-test', function () {
    $page = request('page', 'dashboard');

    return view('admin.dashboard', [
        'page' => $page
    ]);
});

Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])
    ->name('students.store');

Route::get('/students/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])
    ->name('students.edit');

Route::put('/students/{id}', [App\Http\Controllers\StudentController::class, 'update'])
    ->name('students.update');

Route::delete('/students/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])
    ->name('students.destroy');