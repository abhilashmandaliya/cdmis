<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserType;
use App\InstituteCategory;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userType = UserType::find(Auth::user()->userTypeId);
        if(strcasecmp($userType->typeName, "admin") == 0) {
            $consultancyBranches = DB::table('consultancy_branches')->count();
            $userType = UserType::where('typeName', "Consultant")->get();
            $consultants = is_null($userType) ? "N/A" :  DB::table('users')->where('userTypeId', $userType[0]->id)->count();
            $clients = DB::table('client_data')->count();
            $institutes = DB::table('institutes')->count();

            $instituteCategories = InstituteCategory::all();
            $_instituteCategoryLabels = array();
            $_instituteCategoryData = array();
            foreach ($instituteCategories as $instituteCategory) {
                array_push($_instituteCategoryLabels, $instituteCategory->categoryName);
                $temp = DB::table('institutes')->where('categoryId', $instituteCategory->id)->count();
                array_push($_instituteCategoryData, $temp);
            }
            $_monthlyVisits = array();
            for($i = 1; $i <= 12; $i++) {
                $temp = DB::select("SELECT COUNT(*) AS visits FROM client_data WHERE year(created_at) = year(curdate()) AND month(created_at) = $i");
                array_push($_monthlyVisits, $temp[0]->visits);
            }
            return view('admin.home', ['consultancyBranches' => $consultancyBranches, 'consultants' => $consultants, 'clients' => $clients, 'institutes' => $institutes, 'instituteCategoryLabels' => $_instituteCategoryLabels, 'instituteCategoryData' => $_instituteCategoryData, 'monthlyVisits' => $_monthlyVisits]);
        }
        else if(strcasecmp($userType->typeName, "consultant") == 0) {
            $consultant = new ConsultantController();
            return $consultant->index();
        }
        return view('auth.login');
    }
}
