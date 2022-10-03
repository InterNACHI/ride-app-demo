<?php

use App\Http\Controllers\RidesController;
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

Route::redirect('/', 'rides/create')
	->name('home')
	->breadcrumb('Home');

Route::get('rides/create', [RidesController::class, 'create'])
	->name('rides.create')
	->breadcrumb('Request a Ride', 'home');

Route::post('rides', [RidesController::class, 'store'])
	->name('rides.store');
