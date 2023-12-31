<?php

use Illuminate\Support\Facades\Route;
use App\Models\Seller;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\membercontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/sellers', [SellerController::class, 'fetchyajradata'])->name('sellers');;

Route::get('edit/{id}', [SellerController::class, 'edityajradata'])->name('sellers.edit');

Route::post('update/{id}', [SellerController::class, 'updateyajradata'])->name('sellers.update');

Route::get('delete/{id}', [SellerController::class, 'deleteyajradata'])->name('sellers.delete');

Route::get('mail/{id}', [SellerController::class, 'mailyajradata'])->name('sellers.mail');

Route::get('deletedata/{id}', [SellerController::class, 'confirmdelete'])->name('sellers.confirmdelete');

Route::post('create', [SellerController::class, 'createyajradata'])->name('sellers.create');
Route::view('create','yajracreate');

Route::get('members',[membercontroller::class,'data']);

Route::post('createmember', [membercontroller::class, 'savedata'])->name('members.create');
Route::view('createmember','memberform');