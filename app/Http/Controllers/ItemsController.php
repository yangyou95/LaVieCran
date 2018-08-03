<?php

namespace App\Http\Controllers;

use App\Sell;
use App\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ItemsController extends Controller
{
    public function showItems()
    {


      // $sell = none

      $Digital = Sell::where('category','Digital')->orderBy('created_at','desc')->take(4)->get(); #按照类别查找并输出前四个
      $Life = Sell::where('category','Life')->orderBy('created_at','desc')->take(4)->get();
      $Study = Sell::where('category','Study')->orderBy('created_at','desc')->take(4)->get();
      $Elec = Sell::where('category','Elec')->orderBy('created_at','desc')->take(4)->get();
      $Cosmetic = Sell::where('category','Cosmetic')->orderBy('created_at','desc')->take(4)->get();
      $Cusine = Sell::where('category','Cusine')->orderBy('created_at','desc')->take(4)->get();


      return view('items',compact('Digital','Life','Study','Elec','Cosmetic','Cusine'));
    }

    public function showBuy()
    {
      $buy = Buy::all();

      return view('wantbuy',compact('buy'));
    }




    public function showCategory($category)
    {
      $sells = sell::where('category',$category)->orderBy('created_at','desc')->get();

      return view('subpages/sellCategory',compact('sells'));
    }

    public function showItemByID($id)
    {
      $Itemdetail = Sell::find($id);

      return view('subpages/itemdetail',compact('Itemdetail'));
    }

    public function destroySell($id)
    {
      $sell_info = Sell::find($id);

      $sell_image_name = $sell_info->image_name;

      Storage::delete($sell_image_name);

      Sell::find($id)->delete();

      return view('success_delete');
    }

    public function destroyBuy($id)
    {
      Buy::find($id)->delete();

      return view('success_delete');
    }

}
