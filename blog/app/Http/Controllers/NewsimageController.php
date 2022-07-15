<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newsimagerequest;
use App\Models\Newsimage;
use Illuminate\Http\Request;

class NewsimageController extends Controller
{
    //
    public function store(request $request)
    {      
        $file = $request->file('image');
        $destination = base_path() . '\public\photos' ;
    
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';    
        $filename = rand(1111111, 99999999);
        $file->move($destination, $filename . $request->file('image')->getClientOriginalName());
       
        //
        $newsimage= new Newsimage();
        $newsimage->newsid = $request->id;
        $newsimage->imagepath = $filename . $request->file('image')->getClientOriginalName();
        if ($newsimage->save()) {
            return redirect()->route('content-list');
        }   
    }
}
