<?php

namespace App\Http\Controllers;

use App\Models\asistencia;
use App\Http\Requests\StoreasistenciaRequest;
use App\Http\Requests\UpdateasistenciaRequest;

class AsistenciaController extends Controller
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
     * @param  \App\Http\Requests\StoreasistenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreasistenciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateasistenciaRequest  $request
     * @param  \App\Models\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateasistenciaRequest $request, asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(asistencia $asistencia)
    {
        //
    }
}
