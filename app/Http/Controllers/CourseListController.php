<?php

namespace App\Http\Controllers;

use App\CourseList;
use Illuminate\Http\Request;

class CourseListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseLists = CourseList::paginate(5);
        return view('admin.courselist.index', ['courseLists' => $courseLists]);
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
        $course = $request->all();
        $id = CourseList::create($course)->id;
        return response()->redirectTo('/courseList');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseList  $courseList
     * @return \Illuminate\Http\Response
     */
    public function show(CourseList $courseList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseList  $courseList
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseList $courseList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseList  $courseList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseList $courseList)
    {
        $courseList['isActive'] = $request['isActive'];
        $courseList['courseName'] = $request['courseName'];
        $courseList->save();
        return response()->redirectTo('/courseList');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseList  $courseList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseList $courseList)
    {
        $courseList->delete();
        return response()->redirectTo('/courseList');        
    }
}
