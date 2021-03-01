<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flat;
use App\Models\house;
use App\Models\land_plots;
use Illuminate\Support\Facades\DB;

class findObjectController extends Controller
{
    public function findFilterObject(Request $request){
      $type = $request->only(['typeObject']);
      if ($type = 1){
        $Object = new house;
        if($request->landmarkHouses != null){
          $Object = $Object->where('landmark', '=', $request->landmarkHouses);
        }
        if($request->priceHousesMin != null){
          $Object = $Object->where('price', '>=', $request->priceHousesMin);
        }
        if($request->priceHousesMax != null){
          $Object = $Object->where('price', '<=', $request->priceHousesMax);
        }
        if($request->streetHouses != null){
          $Object = $Object->where('street', '=', $request->streetHouses);
        }
        if($request->floorsHousesMin != null){
          $Object = $Object->where('floors', '>=', $request->floorsHousesMin);
        }
        if($request->floorsHousesMax != null){
          $Object = $Object->where('floors', '<=', $request->floorsHousesMax);
        }
        if($request->sizeHousesMin != null){
          $Object = $Object->where('size', '>=', $request->sizeHousesMin);
        }
        if($request->sizeHousesMax != null){
          $Object = $Object->where('size', '<=', $request->sizeHousesMax);
        }
        if($request->squareHousesMin != null){
          $Object = $Object->where('square', '>=', $request->squareHousesMin);
        }
        if($request->squareHousesMax != null){
          $Object = $Object->where('square', '<=', $request->squareHousesMax);
        }
        if($request->roomsHousesMin != null){
          $Object = $Object->where('rooms', '>=', $request->roomsHousesMin);
        }
        if($request->roomsHousesMax != null){
          $Object = $Object->where('rooms', '<=', $request->roomsHousesMax);
        }
        if($request->conditionsHouses != null){
          $Object = $Object->where('conditions', '=', $request->conditionsHouses);
        }
        if($request->updated_atHouses != null){
          $Object = $Object->where('updated_at', '=', $request->updated_atHouses);
        }

         return view('/findFilterObject', ['data'=> $Object->get()]);

      }
      if ($type = 2){
        if($request->landmarkFlat != null){
          $Object = $Object->where('landmark', '=', $request->landmarkFlat);
        }
        if($request->priceFlatMin != null){
          $Object = $Object->where('price', '>=', $request->priceFlatMin);
        }
        if($request->priceFlatMax != null){
          $Object = $Object->where('price', '<=', $request->priceFlatMax);
        }
        if($request->streetFlat != null){
          $Object = $Object->where('street', '=', $request->streetFlat);
        }
        if($request->floorsFlatMin != null){
          $Object = $Object->where('floors', '>=', $request->floorsFlatMin);
        }
        if($request->floorsFlatMax != null){
          $Object = $Object->where('floors', '<=', $request->floorsFlatMax);
        }
        if($request->roomsFlatMin != null){
          $Object = $Object->where('rooms', '>=', $request->roomsFlatMin);
        }
        if($request->roomsFlatMax != null){
          $Object = $Object->where('rooms', '<=', $request->roomsFlatMax);
        }
        if($request->conditionsFlat != null){
          $Object = $Object->where('conditions', '=', $request->conditionsFlat);
        }
        if($request->squareFlatMin != null){
          $Object = $Object->where('square', '>=', $request->squareFlatMin);
        }
        if($request->squareFlatMax != null){
          $Object = $Object->where('square', '<=', $request->squareFlatMax);
        }
        if($request->updated_atFlat != null){
          $Object = $Object->where('updated_at', '=', $request->updated_atFlat);
        }
        return view('/findFilterObject', ['data'=> $Object->get()]);
      }

      if ($type = 3){
        if($request->landmarkLand_plots != null){
          $Object = $Object->where('landmark', '=', $request->landmarkLand_plots);
        }
        if($request->priceLand_plotsMin != null){
          $Object = $Object->where('price', '>=', $request->priceLand_plotsMin);
        }
        if($request->priceLand_plotsMax != null){
          $Object = $Object->where('price', '<=', $request->priceLand_plotsMax);
        }
        if($request->streetLand_plots != null){
          $Object = $Object->where('street', '=', $request->streetLand_plots);
        }
        if($request->sizeLand_plotsMin != null){
          $Object = $Object->where('size', '>=', $request->sizeLand_plotsMin);
        }
        if($request->sizeLand_plotsMax != null){
          $Object = $Object->where('size', '<=', $request->sizeLand_plotsMax);
        }
        if($request->updated_atLand_plots != null){
          $Object = $Object->where('updated_at', '=', $request->updated_atLand_plots);
        }

        return view('/findFilterObject', ['data'=> $Object->get()]);
      }

    }
}
