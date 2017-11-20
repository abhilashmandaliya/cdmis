<?php

namespace App\Http\Controllers;

use App\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        $instituteDetail = DB::select(DB::raw("SELECT a.id, a.instituteName, a.categoryId, a.isVisible, a.logo_path, b.categoryName, (SELECT COUNT(*) FROM institute_up_votes WHERE instituteId = a.id) AS 'upVotes', (SELECT COUNT(*) FROM institute_suggestions WHERE instituteId = a.id) AS 'suggested'FROM institutes a  INNER JOIN institute_categories b ON a.categoryId = b.id WHERE a.id = $institute->id"));
        
        //get all cities with full address
        $addresses = array();
            $cities = DB::select(DB::raw("SELECT * FROM institute_cities WHERE instituteId = $institute->id"));
            foreach ($cities as $city) {
                $cityName = DB::select(DB::raw("SELECT cityName FROM cities WHERE id = $city->cityId"));
                array_push($addresses, array("cityName" => $cityName[0]->cityName, "cityDetail" => $city));
            }

        //get all program details with board and offered courses
        $programs = array();
            $_programs = DB::Select(DB::raw("SELECT * FROM institute_programs WHERE instituteId = $institute->id"));
            foreach ($_programs as $_program) {
                $programName = DB::select(DB::raw("SELECT programName FROM program_lists WHERE id = $_program->programId"));
                $boardName = DB::select(DB::raw("SELECT boardName FROM board_lists WHERE id = $_program->boardId"));
                $courses = DB::select(DB::raw("SELECT a.*, b.* FROM institute_courses a INNER JOIN course_lists b ON a.courseId = b.id WHERE a.instituteProgramId = $_program->id"));
                array_push($programs, array("programDetail" => $_program, "programName" => $programName[0]->programName, "boardName" => $boardName[0]->boardName, "courses" => $courses));
            }
        
        //facilities
        $facilities = array();
            $_facilities = DB::select(DB::raw("SELECT a.*, b.* FROM institute_facilities a INNER JOIN facilities b ON a.facilityId = b.id WHERE a.instituteId = $institute->id"));
            $facilities = $_facilities;
        
        //events
        $events = array();
            $_events = DB::Select(DB::raw("SELECT a.*, b.* FROM institute_events a INNER JOIN events b ON a.eventId = b.id WHERE a.instituteId = $institute->id"));
            $events = $_events;        
        
        //return array(['instituteDetail' => $instituteDetail[0], 'addresses' => $addresses, 'programs' => $programs, 'facilities' => $facilities, 'events' => $events]);
        return view('admin.institute.show', ['instituteDetail' => $instituteDetail[0], 'addresses' => $addresses, 'programs' => $programs, 'facilities' => $facilities, 'events' => $events]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        //
    }

}
