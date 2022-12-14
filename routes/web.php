<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'projectsHome'])
    ->name('home');

Route::get('/project',[PageController::class, 'ShowProject'])
    ->name('project');

Route::get('/dashboard', [PageController::class, 'projectsDashboard'])
    ->middleware(['auth'])->name('dashboard');

Route::resource('projects', ProjectController::class);

require __DIR__.'/auth.php';
