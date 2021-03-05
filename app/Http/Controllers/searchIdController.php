<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plot;
use Illuminate\Support\Facades\Auth;

class searchIdController extends Controller
{
    public function getObject (Request $request){
      $IdNull = $request->only(['searchId']);
      if($IdNull['searchId'] != null){
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
        //print_r($request->only(['full']));
        if($request->only(['full'])){
          return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
        }
        else {
          return view('/findObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
        }
      }
      else {
        $flat = new Flat;
        $house = new House;
        $land_plot = new land_plot;
        $flat = $flat->where('phone', $request->only(['searchPhone']))->get();
        $house = $house->where('phone', $request->only(['searchPhone']))->get();
        $land_plot = $land_plot->where('phone', $request->only(['searchPhone']))->get();
        if($flat->isEmpty() && $house->isEmpty() && $land_plot->isEmpty()){
          return redirect()->intended(route('home'))->withErrors([
            'searchId' => 'Нет такого телефона'
          ]);
        }
        else{
          return view('/findObject', ['data2' => $flat, 'data3' => $land_plot, 'data' => $house]);
        }
      }
    }
}
