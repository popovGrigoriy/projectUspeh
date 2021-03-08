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
      if(auth()->user()->role !='admin'){
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
    })->name('findObject');

Route::post('/findObject', [\App\http\Controllers\searchIdController::class, 'getObject'])->name('findObject');

Route::get('/addObject', function(){
      if(!Auth::check()){
        return redirect(route('login'));
      }
      return redirect(route('home'));
    });
Route::post('/addObject', function(){
      if(!Auth::check()){
        return redirect(route('login'));
      }
      if(Auth::check()){
        if(auth()->user()->role !='admin'){
          return redirect(route('fail'));
        }
      }
      return view('addObject');
    })->name('addObject');

Route::post('/add', [\App\Http\Controllers\addObjectController::class, 'addObject'])->name('addObjectPost');

Route::post('/fullObject', [\App\Http\Controllers\fullObjectController::class, 'about'])->name('fullObject');

Route::post('/fullObject', [\App\Http\Controllers\updateDescriptionController::class, 'update'])->name('updateDescription');

Route::post('/findFilterObject', [\App\Http\Controllers\findObjectController::class, 'findFilterObject'])->name('findFilterObject');

Route::post('/fullObject/success', [\App\Http\Controllers\updateDataController::class, 'update'])->name('updateData');
