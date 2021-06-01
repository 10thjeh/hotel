<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/hotels', [AdminController::class, 'showhotels']);
Route::get('/admin/hotels/{id}', [AdminController::class, 'hotel']);
Route::get('/admin/room/{id}', [AdminController::class, 'kamar']);
Route::get('/admin/new/hotel', [AdminController::class, 'newhotel']);
Route::get('/admin/new/location', [AdminController::class, 'newlocation']);
Route::get('/admin/new/facility', [AdminController::class, 'newfacility']);
Route::get('/admin/new/room/{id}', [AdminController::class, 'newroom']);

//Post routes
Route::post('/admin/hotels/update/d', [AdminController::class, 'updatehoteld']);
Route::post('/admin/hotels/update/f', [AdminController::class, 'updatehotelf']);
Route::post('/admin/hotels/update/p', [AdminController::class, 'updatelocation']);
Route::post('/admin/room/update', [AdminController::class, 'updateroom']);
Route::post('/admin/new/hotel', [AdminController::class, 'submitnewhotel']);
Route::post('/admin/new/location', [AdminController::class, 'submitnewlocation']);
Route::post('/admin/new/facility/hotel', [AdminController::class, 'submithotelfacility']);
Route::post('/admin/new/facility/room', [AdminController::class, 'submitroomfacility']);
Route::post('/admin/new/room', [AdminController::class, 'submitnewroom']);
Route::post('/admin/room/update/f', [AdminController::class, 'updateroomf']);
