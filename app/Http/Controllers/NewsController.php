<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class Newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $newObj = new News();
        // $checkedCat = $newObj->getCatNews($id);

    // $checkedCat =  $this->newsArr[$id-1];
    return view('task2/newsList', $id, ['checkedCat'=>$checkedCat]);
    }


public function checkedNew(int $cat_id, int $new_id) {
    $checkedNew = $this->newsArr[$cat_id-1]['cat_news'][$new_id-1];
    // echo $checkedNew['new_title'];
    return view('task2/checkedNew', ['checkedNew'=>$checkedNew]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news, int $id)
    {
        $newObj = new News();
        $checkedNew = $newObj->getNewsById($id);
    // echo $checkedNew['new_title'];
    return view('task2/checkedNew1', ['checkedNew'=>$checkedNew]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
