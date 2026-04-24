<?php

use App\Http\Controllers\TaskController;
use Illuminate\Routing\Controller;    
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::resource('tasks', TaskController::class);