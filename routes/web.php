<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MerchandiseController;

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

//Route::get('/', 'SiteController@index');

Route::get('/', [SiteController::class,'index']);

Route::get('/categories', [CategoryController::class,'index']);

Route::get('/units', [UnitController::class,'index']);

Route::get('/merchandises', [MerchandiseController::class,'index']);

