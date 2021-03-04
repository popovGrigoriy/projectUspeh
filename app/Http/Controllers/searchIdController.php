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
      $id = "";
      $id = substr($fullId['searchId'], 1);
      if($request->only(['full'])){
        return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
      }
      else {
        return view('/findObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
      }

    }
}
