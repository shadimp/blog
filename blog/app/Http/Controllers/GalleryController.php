<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function list()
    {           
         $s = gallery::query()->get()->all();
        // 
        return view('/gallery', ['content' => $s ]);
    }
    public function store(request $request)
    {      
        $file = $request->file('image');
        $destination = base_path() . '\public\storage' ;
    
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';    
        $filename = rand(1111111, 99999999);
        $file->move($destination, $filename . $request->file('image')->getClientOriginalName());
       
        //
        $newimage= new gallery();
        $xfile= $filename . $request->file('image')->getClientOriginalName();
        $newimage->type=strtolower(pathinfo($xfile,PATHINFO_EXTENSION));
        $newimage->imagepath = $filename . $request->file('image')->getClientOriginalName();
        if ($newimage->save()) {
            return redirect()->route('gallery');
        }   
    }
    
}
