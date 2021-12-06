<?php

namespace App\Http\Controllers;

use App\Models\disciplina;
use App\Http\Requests\StoredisciplinaRequest;
use App\Http\Requests\UpdatedisciplinaRequest;

class DisciplinaController extends Controller
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
     * @param  \App\Http\Requests\StoredisciplinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredisciplinaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedisciplinaRequest  $request
     * @param  \App\Models\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedisciplinaRequest $request, disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(disciplina $disciplina)
    {
        //
    }
}
