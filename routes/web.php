<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
  if(!Auth::check()){
    return redirect(route('login'));
  }
    return view('home');
})->name('home');;

Route::get('/', function () {
    if(Auth::check()){
      return redirect(route('home'));
    }
    return view('index');
})->name('login');

Route::get('/index', function(){
    if(Auth::check()){
      return redirect(route('home'));
    }
    return view('index');
  });

  Route::post('/', [\App\http\Controllers\loginController::class, 'login'])->name('loggin');

Route::get('/registration', function () {
    if(!Auth::check()){
      return redirect(route('login'));
    }
        if(Auth::check()){
      if(auth()->user()->login!='Admin' && auth()->user()->login!='Egor'){
        return redirect(route('fail'));
      }
    }
    return view('registration');

})->name('registration');

Route::post('/registration', [\App\http\Controllers\registrationController::class, 'save']);

Route::get('/objects', function () {
  if(!Auth::check()){
    return redirect(route('login'));
  }
    return view('objects');
})->name('objects');

Route::get('/logout',function(){
  Auth::logout();
  return redirect(route('login'));
})->name('logout');

Route::get('/fail', function(){
    if(!Auth::check()){
      return redirect(route('login'));
    }
    return view('fail');
  })->name('fail');

Route::get('/findObject', function(){
      if(!Auth::check()){
        return redirect(route('login'));
      }
      return view('findObject');
    })->name('fail');

Route::post('/findObject', [\App\http\Controllers\searchIdController::class, 'getObject'])->name('findObject');
Route::get('/addObject', function(){
      return view('addObject');
    })->name('addObject');
