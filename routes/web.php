<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('task');
// });

// Route::get('/task', function () {
//     return view('signin');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [TaskController::class, 'dashboard']); 
Route::get('login', [TaskController::class, 'index'])->name('login');
Route::post('custom-login', [TaskController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [TaskController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [TaskController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [TaskController::class, 'signOut'])->name('signout');
Route::get('/', function () {
    return view('signin');
});