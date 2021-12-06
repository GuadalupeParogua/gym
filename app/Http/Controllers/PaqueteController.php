<?php

namespace App\Http\Controllers;

use App\Models\paquete;
use App\Http\Requests\StorepaqueteRequest;
use App\Http\Requests\UpdatepaqueteRequest;

class PaqueteController extends Controller
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
     * @param  \App\Http\Requests\StorepaqueteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaqueteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaqueteRequest  $request
     * @param  \App\Models\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaqueteRequest $request, paquete $paquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(paquete $paquete)
    {
        //
    }
}
