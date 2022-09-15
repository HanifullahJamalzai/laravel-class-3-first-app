<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     // return 'Hello I am in the Route';
//     return view('home');
//     // return view('welcome');
// });

// Route::get('/about', function (){

//     return view('about', ['data' =>  ['item1', 'item2', 'item3']]);
// });

// Route::get('/service', function (){
//     return 'service page ';
// });

// Route::get('/product/abc', function (){
//     return 'abc product';
// });



Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/about', [DashboardController::class, 'about']);

Route::get('/home', [HomeController::class, 'home']);
Route::get('/service', [HomeController::class, 'service']);
