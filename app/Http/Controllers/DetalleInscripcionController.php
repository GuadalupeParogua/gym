<?php

namespace App\Http\Controllers;

use App\Models\detalle_inscripcion;
use App\Http\Requests\Storedetalle_inscripcionRequest;
use App\Http\Requests\Updatedetalle_inscripcionRequest;

class DetalleInscripcionController extends Controller
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
     * @param  \App\Http\Requests\Storedetalle_inscripcionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_inscripcionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_inscripcion  $detalle_inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_inscripcion $detalle_inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_inscripcion  $detalle_inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_inscripcion $detalle_inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_inscripcionRequest  $request
     * @param  \App\Models\detalle_inscripcion  $detalle_inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_inscripcionRequest $request, detalle_inscripcion $detalle_inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_inscripcion  $detalle_inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_inscripcion $detalle_inscripcion)
    {
        //
    }
}
