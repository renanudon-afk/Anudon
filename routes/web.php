<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// ================= MENU =================
Route::get('/menu_pagination', [MenuController::class, 'menu_pagination'])->name('menu_pagination');
Route::post('/store_menu', [MenuController::class, 'store_menu'])->name('store_menu');
Route::post('/update_menu', [MenuController::class, 'update_menu'])->name('update_menu');
Route::post('/delete_menu', [MenuController::class, 'delete_menu'])->name('delete_menu');


// ================= MENU CATEGORY =================
Route::get('/menu_categ_pagination', [MenuCategoryController::class, 'index'])->name('menu_categ_pagination');


// ================= PRODUCT =================
Route::get('/product_pagination', [ProductController::class, 'product_pagination'])->name('product_pagination');
Route::post('/store_product', [ProductController::class, 'store_product'])->name('store_product');


// ================= STUDENTS =================
Route::get('/students_pagination', [StudentController::class, 'students_pagination'])->name('students_pagination');

// CREATE
Route::post('/store_student', [StudentController::class, 'store_student'])->name('store_student');

// UPDATE  ✅ (FIXED: removed extra "s")
Route::post('/update_student', [StudentController::class, 'update_student'])->name('update_student');

// DELETE
Route::post('/delete_students', [StudentController::class, 'delete_students'])->name('delete_students');