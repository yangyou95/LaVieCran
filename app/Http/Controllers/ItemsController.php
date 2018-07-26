<?php

namespace App\Http\Controllers;

use App\Sell;
use App\Buy;
use Illuminate\Http\Request;


class ItemsController extends Controller
{
    public function showItems()
    {

      $buy = Buy::all();
      // $sell = none

      $Digital = Sell::where('category','Digital')->get(); #按照当前用户邮箱查找sell
      $Life = Sell::where('category','Life')->get();
      $Study = Sell::where('category','Study')->get();
      $Elec = Sell::where('category','Elec')->get();
      $Cosmetic = Sell::where('category','Cosmetic')->get();
      $Cusine = Sell::where('category','Cusine')->get();


      return view('items',compact('Digital','Life','Study','Elec','Cosmetic','Cusine','buy'));
    }


}
