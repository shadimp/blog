<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdaterequest;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{    //
    public function list()
    {
        $s =Category:: query()->get()->all();
        //  dd($s);
         return view('/category/showcat', ['category' => $s]);
    }
   
    public function del(Category  $category)
    {
        $category->delete();
        return redirect()->route('cat-list');
    }

    public function update(CategoryUpdaterequest $request)
    {
        // dd($request);
        $category = Category::query()->where('id', $request->id)->first();
        
        if ($category) {
            $category->id = $request->id;
            $category->title = $request->title;
            

            if ($category->save()) {

                return redirect()->route('cat-list');
            }
            return; // 422
        }
        return; // 401

    }
    public function store(Request $request)
    {
        $category = new category;
        $category->id = $request->id;
        $category->title = $request->title;
      

        if ($category->save()) {
            return redirect()->route('cat-list');
        }
        

        }
}
