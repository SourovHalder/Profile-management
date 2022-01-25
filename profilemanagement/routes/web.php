<?php

use App\Http\Controllers\profileController;
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

Route::get('/createprofile', function () {
    return view('/createprofile');
});
Route::get('/',function(){
    return view('welcome');
});
Route::view('/add', 'createprofile');
Route::post('/add', [profileController::class, 'add']);

Route::get('/pList',[profileController::class, 'show'] );
Route::get('edit/{id}',[profileController::class, 'edit']);
Route::put('update/{id}',[profileController::class, 'update']);
Route::get('delete/{id}',[profileController::class, 'delete']);