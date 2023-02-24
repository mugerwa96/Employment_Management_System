<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Country\Countryindex;
use App\Http\Livewire\User\Index;
use App\Http\Livewire\User\UserCreate;
use App\Http\Livewire\User\UserEdit;
use App\Http\Livewire\User\UserIndex;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(HomeController::class)
->middleware('auth')
->group(function(){
    Route::get('/home','index')->name('home');
    Route::get('/profile','profile')->name('profile');
    Route::get('/users',UserIndex::class)->name('users.index');


    // country  routes
    Route::get('country',Countryindex::class)->name('country.index');
});



