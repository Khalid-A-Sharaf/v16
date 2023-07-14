<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// home , about , contact , team , services

// Route::get('home', function () {
//     return 'home page';
// });

// Route::get('about', function () {
//     return 'about page';
// });

// Route::get('contact', function () {
//     return 'contact page';
// });

// Route::get('team', function () {
//     return 'team page';
// });

// Route::prefix('site')->group(function () {
// Route::get('team',[SiteController::class,'team'])->name('team');
// Route::get('group',[SiteController::class,'group'])->name('group');
// });


// contact , index , projects , resume

// Route::get('descreption/{name}/{age}', [SiteController::class, 'index'])->name('descreption.index');

Route::get('/', [PersonalController::class, 'index'])->name('index');
Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
Route::get('/resume', [PersonalController::class, 'resume'])->name('resume');
