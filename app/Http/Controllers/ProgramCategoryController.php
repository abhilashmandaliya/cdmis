<?php

namespace App\Http\Controllers;

use App\ProgramCategory;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programCategories = ProgramCategory::paginate(5);
        return view('admin.programcategory.index', ['programCategories' => $programCategories]);
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
        $programCategory = $request->all();
        $id = ProgramCategory::create($programCategory)->id;
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramCategory $programCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramCategory $programCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramCategory $programCategory)
    {
        $programCategory['programCategoryName'] = $request['programCategoryName'];
        $programCategory['isVisible'] = $request['isVisible'];
        $programCategory->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramCategory $programCategory)
    {
        $programCategory->delete();
        return $this->index();
    }
}
