<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newsimagerequest;
use Illuminate\Http\Request;

class NewsimageController extends Controller
{
    public function index()
    {
        return view('showcontentblade');
    }
   
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
        return redirect()->route('content-list');
    }
}
