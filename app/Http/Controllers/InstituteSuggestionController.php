<?php

namespace App\Http\Controllers;

use App\InstituteSuggestion;
use App\InstituteUpVote;
use App\ClientData;
use Illuminate\Http\Request;
use Response;

class InstituteSuggestionController extends Controller
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
     * @param  \App\InstituteSuggestion  $instituteSuggestion
     * @return \Illuminate\Http\Response
     */
    public function show(InstituteSuggestion $instituteSuggestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstituteSuggestion  $instituteSuggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(InstituteSuggestion $instituteSuggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstituteSuggestion  $instituteSuggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstituteSuggestion $instituteSuggestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstituteSuggestion  $instituteSuggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstituteSuggestion $instituteSuggestion)
    {
        //
    }

    public function upvote(Request $request)
    {        
        $request['isVerified'] = $request['isVisible'] = true;
        InstituteUpVote::create($request->all());
        InstituteSuggestion::where('clientId', $request['clientId'])
                            ->update(['isVisible' => 0, 'isSelectionDone' => true]);
        ClientData::where('id', $request['clientId'])
                    ->update(['isVisible' => 0]);
        return response()->redirectTo('/');
    }
}
