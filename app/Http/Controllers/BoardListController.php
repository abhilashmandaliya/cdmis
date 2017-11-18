<?php

namespace App\Http\Controllers;

use App\BoardList;
use Illuminate\Http\Request;

class BoardListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardLists = BoardList::paginate(5);
        return view('admin.boardlist.index', ['boardLists' => $boardLists]);
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
        $board = $request->all();
        $id = BoardList::create($board)->id;
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function show(BoardList $boardList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardList $boardList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardList $boardList)
    {
        $boardList['boardName'] = $request['boardName'];
        $boardList['isVisible'] = $request['isVisible'];
        $boardList->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardList  $boardList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardList $boardList)
    {
        $boardList->delete();
        return $this->index();
    }
}
