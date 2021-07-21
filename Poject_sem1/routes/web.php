<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckLogin;

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
// người dùng
Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/register',[HomeController::class,'regester'])->name('regester');;
Route::post('/register',[HomeController::class,'post_regester']);

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/login',[HomeController::class,'post_login'])->name('post_login');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');





Route::prefix('admin')->middleware('checklogin')->group(function () {
   

    Route::get('/',[DashboardController::class,'index'])->name('admin');


    // category
    Route::get('/category', [CategoryController::class, 'index'])->name('List_category');
 
    Route::get('/add_category', [CategoryController::class, 'Add_Category'])->name('Add_Category');
    Route::post('/add_category', [CategoryController::class, 'Create'])->name('Add_cate');
    Route::get('/edit/{id}', [CategoryController::class, 'Edit'])->name('Edit_category');
    Route::put('/edit/{id}', [CategoryController::class, 'Update'])->name('update');

    Route::delete('/delete/{id}', [CategoryController::class,'Delete'])->name('category.delete');
    // brand
    Route::resource('brand',BrandController::class);
    // dashboard
  

    // // statictical
    // Route::get('/Statictical',[DashBoardController::class,'money'])->name('Money');

});
Route::get('/login_admin',[DashboardController::class,'login'])->name('admin.LoginAdmin');
Route::post('/login_admin',[DashboardController::class,'pots_login'])->name('post_loginAdmin');
Route::get('/logout_admin',[DashboardController::class,'logout_admin'])->name('admin.LogoutAdmin');