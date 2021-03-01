<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware (['auth.test'],['except' => 'login'])->prefix ('v1')->group (function (){
   Route::get ('/project',[ProjectController::class,'index']);
   Route::post('/out',[LoginController::class,'out'])->name ('out');
});


Route::middleware ([])->prefix ('v1')->group (function (){
    Route::post('/login',[LoginController::class,'login'])->name ('login');
});


