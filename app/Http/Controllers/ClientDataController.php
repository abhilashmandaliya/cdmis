<?php

namespace App\Http\Controllers;

use App\ClientData;
use App\InstituteSuggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class ClientDataController extends Controller
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function search(Request $request)
    {
        $client = ClientData::where('clientEmail', $request['clientEmail'])->where('isVisible', 1)->get();
        if (!is_null($client) && sizeof($client) > 0 && Hash::check($request['clientPassword'], $client[0]->clientPassword)) {
            $institutes = DB::table('institute_suggestions')
                            ->join('institutes', 'institute_suggestions.instituteId', 'institutes.id')
                            ->select('institute_suggestions.*', 'institutes.*')
                            ->where('institute_suggestions.isVisible', 1)
                            ->where('institutes.isVisible', 1)
                            ->where('institute_suggestions.clientId', $client[0]->id)
                            ->get();
            return json_encode($institutes);
        }
        return null;
    }
}
