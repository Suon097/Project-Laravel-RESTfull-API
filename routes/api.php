<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('/D112012119_admin', 'D112012119_adminController');
Route::resource('/D112012119_news', 'D112012119_newsController');
//Route::resource('/D112012119_news',  D112012119_newsController::class);
