<?php

namespace App\Http\Controllers;

use App\InstituteCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $institutes = DB::select(DB::raw("SELECT a.id, a.instituteName, a.categoryId, a.isVisible, b.categoryName, (SELECT COUNT(*) FROM institute_up_votes WHERE instituteId = a.id) AS 'upVotes', (SELECT COUNT(*) FROM institute_suggestions WHERE instituteId = a.id) AS 'suggested'FROM institutes a  INNER JOIN institute_categories b ON a.categoryId = b.id WHERE a.categoryId = $instituteCategory->id"));
        return view('admin.institute.index', ['institutes' => $institutes, 'instituteCategory' => $instituteCategory->categoryName]);
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
