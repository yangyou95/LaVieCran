<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Buy;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); #获取当前登录用户
        $user_email =$user->email;
        // $sell = Sell::find($user->email); #按照当前用户邮箱查找sell
        $sell = Sell::where('user_email',$user_email)->orderBy('created_at','desc')->get(); #按照当前用户邮箱查找sell
        $buy = Buy::where('user_email',$user_email)->orderBy('created_at','desc')->get();#按照当前用户邮箱查找buy
        return view('home',compact('sell','buy'));
    }


}
