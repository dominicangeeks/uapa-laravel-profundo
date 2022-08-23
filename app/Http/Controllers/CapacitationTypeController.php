<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCapacitationTypeRequest;
use App\Http\Requests\UpdateCapacitationTypeRequest;
use App\Models\CapacitationType;

class CapacitationTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreCapacitationTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapacitationTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CapacitationType  $capacitationType
     * @return \Illuminate\Http\Response
     */
    public function show(CapacitationType $capacitationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CapacitationType  $capacitationType
     * @return \Illuminate\Http\Response
     */
    public function edit(CapacitationType $capacitationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCapacitationTypeRequest  $request
     * @param  \App\Models\CapacitationType  $capacitationType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapacitationTypeRequest $request, CapacitationType $capacitationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CapacitationType  $capacitationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CapacitationType $capacitationType)
    {
        //
    }
}
