<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use Illuminate\Support\Facades\Auth;

class searchIdController extends Controller
{
    public function getObject (Request $request){
      $fullId = $request->only(['searchId']);
      $searchTable = substr($fullId['searchId'], 0, 1);
      if($searchTable = 1){
        $Object = new flat;
      }
      else if($searchTable = 2){
        $Object = new flat;
      }
      else if($searchTable = 3){
        $Object = new flat;
      }
      $id = "";
      (int)$id = substr($fullId['searchId'], 1);
      return view('/findObject', ['data'=>$Object->find($id, 12)]);

    }
}
