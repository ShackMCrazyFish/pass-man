<?php

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

Route::resource('projects', ProjectController::class)->name('index', 'projects');

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->name('dashboard');

