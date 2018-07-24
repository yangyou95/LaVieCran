<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm()
    {
      return view('upload');
    }


    public function storeFile(request $request)
    {
      if ($request->hasFile('file')){

        $filename = $request->file->getClientOriginalName(); #变量存储文件名称

        $filesize = $request->file->getClientSize(); #变量存储文件大小

        $filepath = $request->file->storeAs('public/upload',$filename);  #变量存储文件存放路径

        $request->file->storeAs('public/upload',$filename); #将文件按照原名称放入服务器地址

        $file = new File;

        $file->name = $filename;

        $file->size = $filesize;

        $file->path = $filepath;

        $file->save();

        return 'yes';
      }


      return $request->all();
    }
}
