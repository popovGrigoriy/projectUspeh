<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plot;
use Illuminate\Support\Facades\Auth;

class searchIdController extends Controller
{
    public function getObject (Request $request){
      $fullId = $request->only(['searchId']);
      $searchTable = substr($fullId['searchId'], 0, 1);
      if($searchTable == 1){
        $Object = new house;
      }
      else if($searchTable == 2){
        $Object = new flat;
      }
      else if($searchTable == 3){
        $Object = new land_plot;
      }
      else if($searchTable > 3){
        return redirect()->intended(route('home'))->withErrors([
          'searchId' => 'Нет такого id'
          ]);
      }
      $id = "";
      $id = substr($fullId['searchId'], 1);
      if($Object->where('id', $id)->doesntExist()){
        return redirect()->intended(route('home'))->withErrors([
          'searchId' => 'Нет такого id'
        ]);
      }
      return view('/findObject', ['data'=> [$Object->find($id)]]);

    }
}
