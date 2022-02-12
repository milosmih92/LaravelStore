<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;

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

Route::post('/send-contact-us', [CarsController::class, 'sendContactEmail']);

Route::get('/cars', [CarsController::class, 'getCarListView']);

Route::get('/car/{id}', [CarsController::class, 'getCarView']);

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('register', [LoginController::class, 'registerPage']);
Route::get('login', [LoginController::class, 'loginPage']);
Route::post('register-api', [LoginController::class, 'register']);
Route::post('login-api', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('/login-success', function () {
    return view('successful-login');
});

Route::fallback(function () {
    return view('404-not-found');
});
