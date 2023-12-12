<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DialectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;

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
    return view('welcome');
});

/*
* Partie destinée pour le Dashbord
*/
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

/*
* Partie destinée pour la gestion des utilisateurs
*/
Route::get('/list-user',[UserController::class, "index"])->name('listUser');

/*
* Partie destinée aux dialectes
*/
Route::get('/list-dialect',[DialectController::class, "index"])->name('listDialect');

/*
* Partie destinée aux categories
*/
Route::get('/list-categories',[CategoriesController::class, "index"])->name('listCategorie');