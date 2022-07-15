<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newscontentrequest;
use App\Models\newscontent;
use App\Models\Newsimage;
use Illuminate\Http\Request;

class NewscontentController extends Controller
{
    //
    public function list()
    {
        $s = newscontent::query()->get()->all();
        //  dd($s);
        return view('/content/showcontent', ['content' => $s]);
    }
    public function store(Request $request)
    {
        $newscontent = new newscontent();
        $newscontent->catid = $request->catid;
        $newscontent->newstitle = $request->newstitle;
        $newscontent->summery = $request->summery;
        $newscontent->fullcontent = $request->fullcontent;

        if ($newscontent->save()) {
            return redirect()->route('content-list');
        }
    }
    public function del(newscontent  $content)
    {
        $content->delete();
        return redirect()->route('content-list');
    }

    public function update(Newscontentrequest $request)
    {
        $newscontent = newscontent::query()->where('id', $request->id)->first();
        if ($newscontent) {
            $newscontent->catid = $request->catid;
            $newscontent->newstitle = $request->newstitle;
            $newscontent->summery = $request->summery;
            $newscontent->fullcontent = $request->fullcontent;

            if ($newscontent->save()) {

                return redirect()->route('content-list');
            }
            return; // 422
        }
        return; // 401
    }
    public function mainshow()
    {
        $s = newscontent::query()->get()->all();
       
        $s2 = Newsimage::query()->join('Newscontents', 'Newscontents.id', '=', 'newsimages.newsid')->distinct()->get()->all();

        return view('/mainpage', compact('s','s2'));
    }
}
