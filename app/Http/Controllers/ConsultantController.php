<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InstituteCategory;
use App\Institute;
use App\ProgramList;
use App\ProgramCategory;
use App\CourseList;
use App\City;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = Institute::whereIn('categoryId', function($query){
        $query->select('id')
        ->from(with(new InstituteCategory)->getTable())
        ->where('categoryName', 'School')
        ->where('isVisible', 1);
        })->get();

         $colleges = Institute::whereIn('categoryId', function($query){
        $query->select('id')
        ->from(with(new InstituteCategory)->getTable())
        ->where('categoryName', 'College')
        ->where('isVisible', 1);
        })->get();

         $private_institutes = Institute::whereIn('categoryId', function($query){
        $query->select('id')
        ->from(with(new InstituteCategory)->getTable())
        ->where('categoryName', 'Private Institute')
        ->where('isVisible', 1);
        })->get();

         $programs = ProgramList::all();

         $courses = CourseList::all();

         $cities = City::all();

        return view('consultant.dashboard.index', ['schools' => $schools, 'colleges' => $colleges, 'private_institutes' => $private_institutes, 'programs' => $programs, 'courses' => $courses, 'cities' => $cities]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
