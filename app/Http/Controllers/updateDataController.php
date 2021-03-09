<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plot;
use App\Http\Controllers\searchIdController;
use App\Models\User;

class updateDataController extends Controller
{
  public function update (Request $request){
    $fullId = $request->only(['searchId']);
    $searchTable = substr($fullId['searchId'], 0, 1);
    $id = substr($fullId['searchId'], 1);
    $users = new User;
    $users = $users->all();
    if($request->only(['full'])){
      if($searchTable == 1){
        $Object = new house;

        $String = $Object->find($id);

        $String->landmark = $request->only('landMark')['landMark'];
        $String->street = $request->only('street')['street'];
        $String->number = $request->only('number')['number'];
        $String->conditions = $request->only('conditions')['conditions'];
        $String->size = $request->only('size')['size'];
        $String->year = $request->only('year')['year'];
        $String->percentage = $request->only('percentage')['percentage'];
        $String->square = $request->only('square')['square'];
        $String->livingSquare = $request->only('livingSquare')['livingSquare'];
        $String->kitchen = $request->only('kitchen')['kitchen'];
        $String->rooms = $request->only('rooms')['rooms'];
        $String->wall = $request->only('wall')['wall'];
        $String->roof = $request->only('roof')['roof'];
        $String->floors = $request->only('floors')['floors'];
        $String->facade = $request->only('facade')['facade'];
        $String->gas = $request->only('gas')['gas'];
        $String->sewerage = $request->only('sewerage')['sewerage'];
        $String->slope = $request->only('slope')['slope'];
        $String->description = $request->only('description')['description'];
        $String->price = $request->only('price')['price'];
        $String->agent = $request->only('agent')['agent'];
        $String->sellers_name = $request->only('sellers_name')['sellers_name'];
        $String->phone = $request->only('phone')['phone'];

        $String->save();

        return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
      }
      else if($searchTable == 2){
        $Object = new flat;

        $String = $Object->find($id);

        $String->landmark = $request->only('landMark')['landMark'];
        $String->street = $request->only('street')['street'];
        $String->number = $request->only('number')['number'];
        $String->numberFlat = $request->only('numberFlat')['numberFlat'];
        $String->floors = $request->only('floor')['floor'];
        $String->typeHouse = $request->only('typeHouse')['typeHouse'];
        $String->rooms = $request->only('rooms')['rooms'];
        $String->square = $request->only('square')['square'];
        $String->livingSquare = $request->only('livingSquare')['livingSquare'];
        $String->kitchen = $request->only('kitchen')['kitchen'];
        $String->layout = $request->only('layout')['layout'];
        $String->balcony = $request->only('balcony')['balcony'];
        $String->conditions = $request->only('conditions')['conditions'];
        $String->price = $request->only('price')['price'];
        $String->agent = $request->only('agent')['agent'];
        $String->sellers_name = $request->only('sellers_name')['sellers_name'];
        $String->phone = $request->only('phone')['phone'];
        $String->description = $request->only('description')['description'];

        $String->save();

        return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
      }
      else if($searchTable == 3){
        $Object = new land_plot;

        $String = $Object->find($id);

        $String->landmark = $request->only('landMark')['landMark'];
        $String->street = $request->only('street')['street'];
        $String->number = $request->only('number')['number'];
        $String->conditions = $request->only('conditions')['conditions'];
        $String->size = $request->only('size')['size'];
        $String->percentage = $request->only('percentage')['percentage'];
        $String->facade = $request->only('facade')['facade'];
        $String->gas = $request->only('gas')['gas'];
        $String->sewerage = $request->only('sewerage')['sewerage'];
        $String->slope = $request->only('slope')['slope'];
        $String->description = $request->only('description')['description'];
        $String->price = $request->only('price')['price'];
        $String->agent = $request->only('agent')['agent'];
        $String->sellers_name = $request->only('sellers_name')['sellers_name'];
        $String->phone = $request->only('phone')['phone'];

        $String->save();

        return view('/fullObject', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId']]);
      }
    }
    else{
      if($searchTable == 1){
        $Object = new house;

        return view('/updateData', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId'], 'object' => $searchTable, 'data2' => $users]);
      }
      else if($searchTable == 2){
        $Object = new flat;

        return view('/updateData', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId'], 'object' => $searchTable, 'data2' => $users]);
      }
      else if($searchTable == 3){
        $Object = new land_plot;

        return view('/updateData', ['data'=> [$Object->find($id)], 'fullID' => $fullId['searchId'], 'object' => $searchTable, 'data2' => $users]);
      }
    }
  }
}
