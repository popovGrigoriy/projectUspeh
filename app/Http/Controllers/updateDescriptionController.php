<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plot;

class updateDescriptionController extends Controller
{
  public function update (Request $request){
    $description = $request->only(['description']);
    $fullId = $request->only(['searchId']);
    $searchTable = substr($fullId['searchId'], 0, 1);
    $id = substr($fullId['searchId'], 1);

    //return print_r($request->only(['status'])['status']);

    if($searchTable == 1){
      $Object = new house;
      $String = $Object->find($id);
      if ($request->only(['status'])['status'] == 11) {
        $String->status = "0";
      }
      elseif ($request->only(['status'])['status'] == 22) {
        $String->status = "1";
      }
      else{
        $String->description = $request->only(['description'])['description'];
      }

      $String->save();

      return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
    }
    else if($searchTable == 2){
      $Object = new flat;
      $String = $Object->find($id);
      if ($request->only(['status'])['status'] == 11) {
        $String->status = "0";
      }
      elseif ($request->only(['status'])['status'] == 22) {
        $String->status = "1";
      }
      else{
        $String->description = $request->only(['description'])['description'];;
      }
      $String->save();

      return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
    }
    else if($searchTable == 3){
      $Object = new land_plot;
      $String = $Object->find($id);
      if ($request->only(['status'])['status'] == 11) {
        $String->status = "0";
      }
      elseif ($request->only(['status'])['status'] == 22) {
        $String->status = "1";
      }
      else{
        $String->description = $request->only(['description'])['description'];;
      }
      $String->save();

      return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
    }
  }
}
