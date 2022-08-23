<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipantVersionRequest;
use App\Http\Requests\UpdateParticipantVersionRequest;
use App\Models\ParticipantVersion;

class ParticipantVersionController extends Controller
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
     * @param  \App\Http\Requests\StoreParticipantVersionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantVersionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantVersion  $participantVersion
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantVersion $participantVersion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantVersion  $participantVersion
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantVersion $participantVersion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantVersionRequest  $request
     * @param  \App\Models\ParticipantVersion  $participantVersion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantVersionRequest $request, ParticipantVersion $participantVersion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantVersion  $participantVersion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantVersion $participantVersion)
    {
        //
    }
}
