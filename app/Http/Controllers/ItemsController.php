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

      $Digital = Sell::where('category','Digital')->take(4)->get(); #按照类别查找并输出前四个
      $Life = Sell::where('category','Life')->take(4)->get();
      $Study = Sell::where('category','Study')->take(4)->get();
      $Elec = Sell::where('category','Elec')->take(4)->get();
      $Cosmetic = Sell::where('category','Cosmetic')->take(4)->get();
      $Cusine = Sell::where('category','Cusine')->take(4)->get();


      return view('items',compact('Digital','Life','Study','Elec','Cosmetic','Cusine','buy'));
    }

    public function showDigital()
    {
      $Digital = Sell::where('category','Digital')->get(); #按照类别查找并输出

      return view('subpages/digital',compact('Digital'));

    }

    public function showLife()
    {
      $Life = Sell::where('category','Life')->get(); #按照类别查找并输出

      return view('subpages/life',compact('Life'));

    }

    public function showStudy()
    {
      $Study = Sell::where('category','Study')->get(); #按照类别查找并输出

      return view('subpages/study',compact('Study'));

    }

    public function showElec()
    {
      $Elec = Sell::where('category','Elec')->get(); #按照类别查找并输出

      return view('subpages/elec',compact('Elec'));

    }

    public function showCosmetic()
    {
      $Cosmetic = Sell::where('category','Cosmetic')->get(); #按照类别查找并输出

      return view('subpages/cosmetic',compact('Cosmetic'));

    }

    public function showCusine()
    {
      $Cusine = Sell::where('category','Cusine')->get(); #按照类别查找并输出

      return view('subpages/cusine',compact('Cusine'));

    }

}
