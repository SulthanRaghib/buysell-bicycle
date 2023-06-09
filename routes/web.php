<?php

use App\Http\Controllers\RoleController;
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
    return view('backend');
});

Route::get('/blank-page', function () {
    return view('pages.blank');
});

Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/edit/{id_role}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id_role}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{id_role}', [RoleController::class, 'destroy'])->name('role.destroy');


Route::get('tables', function () {
    return view('pages.tables');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cycle', function () {
    return view('pages.cycle');
});

Route::get('/news', function () {
    return view('pages.news');
});
