<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plot;

class addObjectController extends Controller
{
  public function addObject (Request $request){
    $type = $request->only(['type']);

    // print_r($type);
    // $arr = [6,3,8,13];
    // print_r($arr);

    if($type['type'] == "Квартира"){

      $Object = new flat;

      $Object->landmark = $request->input('landMark');
      $Object->street = $request->input('street');
      $Object->number = $request->input('number');
      $Object->numberFlat = $request->input('numberFlat');
      $Object->floors = $request->input('floor');
      $Object->typeHouse = $request->input('typeHouse');
      $Object->rooms = $request->input('rooms');
      $Object->square = $request->input('square');
      $Object->livingSquare = $request->input('livingSquare');
      $Object->kitchen = $request->input('kitchen');
      $Object->layout = $request->input('layout');
      $Object->balcony = $request->input('balcony');
      $Object->conditions = $request->input('conditions');
      $Object->price = $request->input('price');
      $Object->agent = $request->input('agent');
      $Object->sellers_name = $request->input('sellers_name');
      $Object->phone = $request->input('phone');
      $Object->description = $request->input('description');

      $Object->save();

      return redirect()->route('home');
    }
    else if($type['type'] == "Дом"){

      $Object = new house;

      $Object->landmark = $request->input('landMark');
      $Object->street = $request->input('street');
      $Object->number = $request->input('number');
      $Object->conditions = $request->input('conditions');
      $Object->size = $request->input('size');
      $Object->year = $request->input('year');
      $Object->percentage = $request->input('percentage');
      $Object->square = $request->input('square');
      $Object->livingSquare = $request->input('livingSquare');
      $Object->kitchen = $request->input('kitchen');
      $Object->rooms = $request->input('rooms');
      $Object->wall = $request->input('wall');
      $Object->roof = $request->input('roof');
      $Object->floors = $request->input('floors');
      $Object->yard = $request->input('yard');
      $Object->facade = $request->input('facade');
      $Object->gas = $request->input('gas');
      $Object->sewerage = $request->input('sewerage');
      $Object->slope = $request->input('slope');
      $Object->description = $request->input('description');
      $Object->price = $request->input('price');
      $Object->agent = $request->input('agent');
      $Object->sellers_name = $request->input('sellers_name');
      $Object->phone = $request->input('phone');

      $Object->save();

      return redirect()->route('home');
    }
    else if($type['type'] == "Участок"){

      $Object = new land_plot;

      $Object->landmark = $request->input('landMark');
      $Object->street = $request->input('street');
      $Object->number = $request->input('number');
      $Object->conditions = $request->input('conditions');
      $Object->size = $request->input('size');
      $Object->percentage = $request->input('percentage');
      $Object->facade = $request->input('facade');
      $Object->gas = $request->input('gas');
      $Object->sewerage = $request->input('sewerage');
      $Object->slope = $request->input('slope');
      $Object->description = $request->input('description');
      $Object->price = $request->input('price');
      $Object->agent = $request->input('agent');
      $Object->sellers_name = $request->input('sellers_name');
      $Object->phone = $request->input('phone');

      $Object->save();

      return redirect()->route('home');
    }
    else {
      echo "Add is falied";
    }
  }
}
