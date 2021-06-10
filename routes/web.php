<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HotelDetailController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\RequireLogin;

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

/*=========
Admin routes
===========*/

//Get routes
Route::get('/admin', [AdminController::class, 'index'])->middleware(AdminAuth::class);
Route::get('/admin/hotels', [AdminController::class, 'showhotels'])->name('hotels')->middleware(AdminAuth::class);
Route::get('/admin/hotels/{id}', [AdminController::class, 'hotel'])->middleware(AdminAuth::class)->middleware(AdminAuth::class);
Route::get('/admin/room/{id}', [AdminController::class, 'kamar'])->middleware(AdminAuth::class);
Route::get('/admin/new/hotel', [AdminController::class, 'newhotel'])->middleware(AdminAuth::class);
Route::get('/admin/new/location', [AdminController::class, 'newlocation'])->middleware(AdminAuth::class);
Route::get('/admin/new/facility', [AdminController::class, 'newfacility'])->middleware(AdminAuth::class);
Route::get('/admin/new/room/{id}', [AdminController::class, 'newroom'])->middleware(AdminAuth::class);
Route::get('/admin/delete/room/{id}', [AdminController::class, 'removeroom'])->middleware(AdminAuth::class);
Route::get('/admin/delete/hotel/{id}', [AdminController::class, 'removehotel'])->middleware(AdminAuth::class);
Route::get('/admin/delete/hotel/image/{name}', [AdminController::class, 'removehotelimage'])->middleware(AdminAuth::class);
Route::get('/admin/delete/room/image/{name}', [AdminController::class, 'removeroomimage'])->middleware(AdminAuth::class);

//Post routes
Route::post('/admin/hotels/update/d', [AdminController::class, 'updatehoteld'])->middleware(AdminAuth::class);
Route::post('/admin/hotels/update/f', [AdminController::class, 'updatehotelf'])->middleware(AdminAuth::class);
Route::post('/admin/hotels/update/p', [AdminController::class, 'updatelocation'])->middleware(AdminAuth::class);
Route::post('/admin/hotels/image', [AdminController::class, 'addhotelimage'])->middleware(AdminAuth::class);
Route::post('/admin/room/image', [AdminController::class, 'addroomimage'])->middleware(AdminAuth::class);
Route::post('/admin/room/update', [AdminController::class, 'updateroom'])->middleware(AdminAuth::class);
Route::post('/admin/new/hotel', [AdminController::class, 'submitnewhotel'])->middleware(AdminAuth::class);
Route::post('/admin/new/location', [AdminController::class, 'submitnewlocation'])->middleware(AdminAuth::class);
Route::post('/admin/new/facility/hotel', [AdminController::class, 'submithotelfacility'])->middleware(AdminAuth::class);
Route::post('/admin/new/facility/room', [AdminController::class, 'submitroomfacility'])->middleware(AdminAuth::class);
Route::post('/admin/new/room', [AdminController::class, 'submitnewroom'])->middleware(AdminAuth::class);
Route::post('/admin/room/update/f', [AdminController::class, 'updateroomf'])->middleware(AdminAuth::class);
Route::post('/admin/room/accomodation', [AdminController::class, 'updaterooma'])->middleware(AdminAuth::class);


//Home
//GET routes
Route::get('/', function(){ return redirect('/home');});
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/register',[LoginController::class,'registerview']);
Route::get('/login',[LoginController::class,'loginview'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/user', [UserController::class, 'showuser'])->middleware(RequireLogin::class);
Route::get('/aboutus', [HomeController::class,'aboutus']);

//POST routes
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/user', [UserController::class, 'submit'])->middleware(RequireLogin::class);
Route::post('/user/image', [UserController::class, 'image'])->middleware(RequireLogin::class);

Route::post('/hotel', [HomeController::class, 'hotel']);
Route::post('/book', [HotelController::class, 'confirmbook'])->middleware(RequireLogin::class);
//Development
Route::get('/debug', [HomeController::class, 'debug']);

//Hotel
//GET routes
Route::get('/hotel',[HotelController::class,'index']);
Route::get('/hoteldetail/{id}', [HotelController::class, 'detail']);
Route::get('/room/{id}', [HotelController::class,'room']);
Route::get('/book/{id}', [HotelController::class, 'book'])->middleware(RequireLogin::class);

//Invoice
//Get Routes
Route::get('/invoice/{id}',[InvoiceController::class,'index']);

//Detail
//GET ROUTES
Route::get('/details', [HotelDetailController::class,'index']);// Ini di apus juga gapapa

//Cart
//Get
Route::get('/cart', [CartController::class, 'index']);

//Room
// Route::get('/room/{id}',[RoomController::class, 'index']);
