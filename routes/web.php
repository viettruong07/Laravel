<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

Route::get('/showWelcome',[HomeController::class, 'showWelcome']);

Route::get('/user',[UserController::class,'getUser']);

Route::get('about',function(){
    return 'About Content';
});

Route::get('/user/{the_about}',[UserController::class,'getAbout']);


Route::any('submit-form', function(){
    return 'Process Form';
});

Route::get('about/class/{theArt}/{thePrice}',function($theArt,$thePrice){
    return "The product: $theArt and $thePrice";
});

//Thêm dữ liệu
Route::get('/insert', function(){
    DB::insert('insert into posts(title, body) values(?,?)',['PHP with Laravel','Laravel is the best framework !']);
    return 'Done';
});

//Truy vấn dữ liệu
Route::get('/read', function(){
    $result = DB::select('select * from posts where id = ?',[1]);
    return $result;
    // foreach($result as $posts){
    //     return $posts->title;
    // }
});

//Cập nhật dữ liệu
Route::get('update', function(){
    $updated = DB::update('update posts set title = "New Title Ahihi" where id = ?', [1]);
    return $updated;
});

//Xoá dữ liệu
Route::get('delete', function(){
    $deleted = DB::delete('delete from posts where id = ?',[2]);
    return $deleted;
});


//Bai Products
Route::get('/',[ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class,'create'])->name('create');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
