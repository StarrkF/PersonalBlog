<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends ConfigController
{
    public function index(Request $request)
    {
        $about=About::first(); 
        return view('admin.pages.hakkimda.index')->with('about',$about);
    }
    
    public function update(Request $request)
    {
        $about=About::latest();
        $image=$request->img;
        $content=$request->content;
        
        if($image)
        {
            $this->imgDelete($about->first()->img);
            $img=$this->upload('about',$image);
            $about->update([
                'content' => $content,
                'img' => $img
            ]);

            return back();
        }
        else
        {
            $about->update([
                'content'=>$content
            ]);
            
            return back();
        }
    }
}
