<?php

namespace App\Http\Controllers;

use App\Institute;
use App\InstituteCategory;
use App\Event;
use App\Facility;
use App\InstituteCity;
use App\City;
use App\ProgramList;
use App\BoardList;
use App\CourseList;
use App\InstituteCourse;
use App\InstituteProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $instituteCategories = InstituteCategory::all();

        $_cities = City::all();

        $_programList = ProgramList::all();

        $_boardList = BoardList::all();

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
                $ignore = array();
                foreach ($courses as $course) {
                    array_push($ignore, $course->id);
                }
                $remainingCourses = DB::table('course_lists')
                                        ->whereNotIn('id', $ignore)
                                        ->get();
                array_push($programs, array("programDetail" => $_program, "programName" => $programName[0]->programName, "boardName" => $boardName[0]->boardName, "courses" => $courses, "coursesNotTaken" => $remainingCourses));
            }
        
        //facilities
        $facilities = array();
            $_facilities = DB::select(DB::raw("SELECT a.*, b.* FROM institute_facilities a INNER JOIN facilities b ON a.facilityId = b.id WHERE a.instituteId = $institute->id"));
            $facilities = $_facilities;
        
        //events
        $events = array();
            $_events = DB::Select(DB::raw("SELECT a.*, b.* FROM institute_events a INNER JOIN events b ON a.eventId = b.id WHERE a.instituteId = $institute->id"));
            $events = $_events;        
        
        //return array(['instituteDetail' => $instituteDetail[0], 'addresses' => $addresses, 'programs' => $programs, 'facilities' => $facilities, 'events' => $events, 'instituteCategories' => $instituteCategories, 'cities' => $cities]);
        return view('admin.institute.edit', ['instituteDetail' => $instituteDetail[0], 'addresses' => $addresses, 'programs' => $programs, 'facilities' => $facilities, 'events' => $events, 'instituteCategories' => $instituteCategories, 'cities' => $_cities, 'programList' => $_programList, 'boardList' => $_boardList]);
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
        $section = $request['section'];

        // update the logo
        if(strcasecmp($section, "logo_update") == 0)
        {
            $name = Storage::disk('public_public')->put('', $request->file('logo_path'));
            $institute['logo_path'] = '/logo/' . $name;
        }
        else if(strcasecmp($section, "basic_detail_update") == 0)
        {
            $institute['instituteName'] = $request['instituteName'];
            $institute['categoryId'] = $request['categoryId'];
            $institute['isVisible'] = $request['isVisible'];
        }
        else if(strcasecmp($section, "address_update") == 0)
        {
            $instituteCity = InstituteCity::find($request['addressId']);
            $instituteCityController = new InstituteCityController();
            $instituteCityController->update($request, $instituteCity);
        }
        else if(strcasecmp($section, "program_detail_update") == 0)
        {
            $data = $request->all();
            $instituteProgram = InstituteProgram::find($data['instituteProgramId']);
            $instituteProgramController = new InstituteProgramController();
            $instituteProgramController->update($request, $instituteProgram);
            InstituteCourse::where('instituteProgramId', $data['programDetailId'])->delete();
            foreach ($data['coursesChosen'] as $chosenCourse) {
                $temp['courseId'] = $chosenCourse->id;
                $temp['instituteProgramId'] = $data['programDetailId'];
                $temp['isVisible'] = 1;
            }
        }
        $institute->save();
        return $this->edit($institute);
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

    public function search(Request $request) {
        $search = $request->search;
        $data = $request->data;
            
        $result="";
        if($search == "school" || $search == "college" || $search == "private_institute")
        {
           $result = DB::table('institutes')
            ->join('institute_cities', 'institutes.id', '=', 'institute_cities.instituteId')
            ->join('cities', 'cities.id', '=', 'institute_cities.cityId')
            ->select('institutes.id AS iid', 'institutes.instituteName AS iname', 'institutes.logo_path AS ilogo','institute_cities.address AS iaddress','institute_cities.contactNumber AS inum','institute_cities.websiteLink AS isite', 'cities.cityName AS icity' )
            ->where('institutes.id', $data)
            ->get();
        }

        else if($search == "program")
        {
            $iids = InstituteProgram::where('programId', $data)->pluck('instituteId')->toArray();

             $result = DB::table('institutes')
            ->join('institute_cities', 'institutes.id', '=', 'institute_cities.instituteId')
            ->join('cities', 'cities.id', '=', 'institute_cities.cityId')
            ->select('institutes.id AS iid', 'institutes.instituteName AS iname', 'institutes.logo_path AS ilogo','institute_cities.address AS iaddress','institute_cities.contactNumber AS inum','institute_cities.websiteLink AS isite', 'cities.cityName AS icity' )
            ->whereIn('institutes.id', $iids)
            ->get();
        }

        else if($search == "course")
        {
            $iids = InstituteCourse::where('courseId', $data)->pluck('instituteProgramId')->toArray();
            $ids = InstituteProgram::whereIn('id', $iids)->pluck('instituteId')->toArray();

             $result = DB::table('institutes')
            ->join('institute_cities', 'institutes.id', '=', 'institute_cities.instituteId')
            ->join('cities', 'cities.id', '=', 'institute_cities.cityId')
            ->select('institutes.id AS iid', 'institutes.instituteName AS iname', 'institutes.logo_path AS ilogo','institute_cities.address AS iaddress','institute_cities.contactNumber AS inum','institute_cities.websiteLink AS isite', 'cities.cityName AS icity' )
            ->whereIn('institutes.id', $ids)
            ->get();
        }

        else if($search == "city")
        {
            $ids = InstituteCity::where('cityId', $data)->pluck('instituteId')->toArray();

             $result = DB::table('institutes')
            ->join('institute_cities', 'institutes.id', '=', 'institute_cities.instituteId')
            ->join('cities', 'cities.id', '=', 'institute_cities.cityId')
            ->select('institutes.id AS iid', 'institutes.instituteName AS iname', 'institutes.logo_path AS ilogo','institute_cities.address AS iaddress','institute_cities.contactNumber AS inum','institute_cities.websiteLink AS isite', 'cities.cityName AS icity' )
            ->whereIn('institutes.id', $ids)
            ->where('cities.id', $data)
            ->get();
        }

        return view('consultant.searchResult.index', ['result' => $result]);
            
    }


}
