<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registrationController extends Controller
{
    public function save(Request $request){

      $validateFields = $request->validate([
        'login' => 'required',
        'password' => 'required'
      ]);

      if(User::where('login', $validateFields['login'])->exists()){
        return redirect(route('registration'))->withErrors([
          'login' => 'Пользователь уже зарегистрирован'
        ]);
      }

      $user = User::create($validateFields);
      if($user){
        // Auth::login($user);
        return redirect(route('success'));
      };
      return redirect(route('registration'))->withErrors([
        'formError' => 'Произошла ошибка при сохранении'
      ]);
    }
}
