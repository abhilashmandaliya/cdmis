<?php

namespace App\Http\Controllers;

use App\StreamCategory;
use Illuminate\Http\Request;

class StreamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streamCategories = StreamCategory::paginate(5);
        return view('admin.streamcategory.index', ['streamCategories' => $streamCategories]);
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
        $streamCategory = $request->all();
        $id = StreamCategory::create($streamCategory)->id;
        return response()->redirectTo('/streamCategory');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StreamCategory  $streamCategory
     * @return \Illuminate\Http\Response
     */
    public function show(StreamCategory $streamCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StreamCategory  $streamCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(StreamCategory $streamCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StreamCategory  $streamCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StreamCategory $streamCategory)
    {
        $streamCategory['streamName'] = $request['streamName'];
        $streamCategory['isVisible'] = $request['isVisible'];
        $streamCategory->save();
        return response()->redirectTo('/streamCategory');                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StreamCategory  $streamCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StreamCategory $streamCategory)
    {
        $streamCategory->delete();
        return response()->redirectTo('/streamCategory');                
    }
}
