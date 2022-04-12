<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function upload($path,$img)
    {
        // $path = 'hakkimizda'
        $imgname=time().uniqid().".".$img->extension();
        $img->move(public_path('upload/'.$path.'/'),$imgname); // PATH = 'upload/hakkimizda/'
        $imgpath='upload/'.$path.'/'.$imgname;
        return $imgpath;
    }

    public function imgDelete($img)
    {
        try {
            unlink(public_path($img));
            return true;
        } catch (\Throwable $th) {
            return false;
        } 
    }

    
}
