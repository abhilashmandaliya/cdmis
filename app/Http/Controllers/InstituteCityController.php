<?php

namespace App\Http\Controllers;

use App\InstituteCity;
use Illuminate\Http\Request;

class InstituteCityController extends Controller
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
     * @param  \App\InstituteCity  $instituteCity
     * @return \Illuminate\Http\Response
     */
    public function show(InstituteCity $instituteCity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstituteCity  $instituteCity
     * @return \Illuminate\Http\Response
     */
    public function edit(InstituteCity $instituteCity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstituteCity  $instituteCity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstituteCity $instituteCity)
    {
        $instituteCity['cityId'] = $request['cityId'];
        $instituteCity['address'] = $request['address'];
        $instituteCity['websiteLink'] = $request['websiteLink'];
        $instituteCity['contactNumber'] = $request['contactNumber'];
        $instituteCity['isVisible'] = $request['isVisible'];
        $instituteCity->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstituteCity  $instituteCity
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstituteCity $instituteCity)
    {
        //
    }
}
