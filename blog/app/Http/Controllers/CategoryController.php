<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function list()
    {
        $s =Category:: query()->get()->all();
        //  dd($s);
         return view('/category/showcat', ['category' => $s]);
    }
}
