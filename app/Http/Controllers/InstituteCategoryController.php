<?php

namespace App\Http\Controllers;

use App\InstituteCategory;
use Illuminate\Http\Request;

class InstituteCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = InstituteCategory::paginate(5);
        return view('admin.instituteCategories.index', ['categories' => $categories]);
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
        $data = $request->all();
        $id = InstituteCategory::create($data)->id;
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InstituteCategory  $instituteCategory
     * @return \Illuminate\Http\Response
     */
    public function show(InstituteCategory $instituteCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstituteCategory  $instituteCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(InstituteCategory $instituteCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstituteCategory  $instituteCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstituteCategory $instituteCategory)
    {
        $instituteCategory->categoryName = $request['categoryName'];
        $instituteCategory->isVisible = $request['isVisible'];
        $instituteCategory->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstituteCategory  $instituteCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstituteCategory $instituteCategory)
    {
        $instituteCategory->delete();
        return $this->index();
    }
}
