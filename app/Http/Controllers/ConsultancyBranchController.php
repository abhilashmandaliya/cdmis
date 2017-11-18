<?php

namespace App\Http\Controllers;

use App\ConsultancyBranch;
use App\City;
use Illuminate\Http\Request;

class ConsultancyBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultancyBranches = ConsultancyBranch::with('city')->paginate(5);
        $cities = City::all();
        return view('admin.consultancybranches.index', ['consultancyBranches' => $consultancyBranches, 'cities' => $cities]);
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
        $consultancyBranch = $request->all();
        $id = ConsultancyBranch::create($consultancyBranch)->id;
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsultancyBranch  $consultancyBranch
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultancyBranch $consultancyBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsultancyBranch  $consultancyBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultancyBranch $consultancyBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsultancyBranch  $consultancyBranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultancyBranch $consultancyBranch)
    {
        $consultancyBranch['branchName'] = $request['branchName'];
        $consultancyBranch['branchAddress'] = $request['branchAddress'];
        $consultancyBranch['contactNumber'] = $request['contactNumber'];
        $consultancyBranch['branchCity'] = $request['branchCity'];
        $consultancyBranch['isVisible'] = $request['isVisible'];
        $consultancyBranch->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsultancyBranch  $consultancyBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultancyBranch $consultancyBranch)
    {
        $consultancyBranch->delete();
        return $this->index();
    }
}
