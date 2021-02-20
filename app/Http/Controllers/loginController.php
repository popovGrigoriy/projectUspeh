<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request){
      if(Auth::Check()){
        return redirect()->intended(route('home'));
      }

      $formFields = $request->only(['login', 'password']);

      if(Auth::attempt($formFields)){
        return redirect()->intended(route('home'));
      }
      else{
        return redirect(route('login'))->witherrors([
          'login' => 'Не удалось авторизироваться'

        ]);
      }
    }
}
