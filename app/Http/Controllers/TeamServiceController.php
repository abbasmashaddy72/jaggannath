<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamServiceRequest;
use App\Http\Requests\UpdateTeamServiceRequest;
use App\Models\TeamService;

class TeamServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreTeamServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamService  $teamService
     * @return \Illuminate\Http\Response
     */
    public function show(TeamService $teamService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamService  $teamService
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamService $teamService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamServiceRequest  $request
     * @param  \App\Models\TeamService  $teamService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamServiceRequest $request, TeamService $teamService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamService  $teamService
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamService $teamService)
    {
        //
    }
}
