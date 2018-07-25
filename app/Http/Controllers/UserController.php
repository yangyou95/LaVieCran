<?php

namespace App\Http\Controllers;

use App\Sell;
use App\Buy;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function showUploadForm()
    {
      return view('upload');
    }


    public function storeSell(request $request)
    {
      if ($request->hasFile('file')){

        $filename = $request->file->getClientOriginalName(); #变量存储文件名称

        $filesize = $request->file->getClientSize(); #变量存储文件大小

        $filepath = $request->file->storeAs('public/upload',$filename);  #变量存储文件存放路径

        $request->file->storeAs('public/upload',$filename); #将文件按照原名称放入服务器地址

        $sell = new Sell;

        $sell->image_name = $filename;

        $user = Auth::user(); #获取当前登录用户

        $sell->user_email =$user->email; #获取当前用户邮箱

        $sell->size = $filesize;

        $sell->path = $filepath;

        $sell->title = $request->input('title');

        $sell->description = $request->input('description');

        $sell->category = $request->input('category');
        

        $sell->save();

        return 'yes';
      }


      return $request->all();
    }
}
