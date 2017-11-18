<?php

namespace App\Http\Controllers;

use App\ProgramList;
use App\ProgramCategory;
use App\StreamCategory;
use Illuminate\Http\Request;

class ProgramListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programLists = ProgramList::with('program_category')->with('stream_category')->paginate(5);
        $programCategories = ProgramCategory::all();
        $streamCategories = StreamCategory::all();
        return view('admin.programlist.index', ['programLists' => $programLists, 'programCategories' => $programCategories, 'streamCategories' => $streamCategories]);
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
        $programList = $request->all();
        $id = ProgramList::create($programList)->id;
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramList $programList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramList $programList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramList $programList)
    {
        $programList['programName'] = $request['programName'];
        $programList['programCategoryId'] = $request['programCategoryId'];
        $programList['streamId'] = $request['streamId'];
        $programList['isVisible'] = $request['isVisible'];
        $programList->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramList  $programList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramList $programList)
    {
        $programList->delete();
        return $this->index();
    }
}
