<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PeopleController::class,'index']);
Route::get('/showPeople/{id}', [PeopleController::class,'show']);
Route::get('/editPeople/{id}', [PeopleController::class,'edit']);
Route::post('/updatePeople/{id}', [PeopleController::class,'update']);
Route::post('/deletePeople/{id}', [PeopleController::class,'destroy']);
Route::post('/deleteAll', [PeopleController::class,'destroyAll']);
