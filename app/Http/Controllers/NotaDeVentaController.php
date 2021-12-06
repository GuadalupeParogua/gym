<?php

namespace App\Http\Controllers;

use App\Models\nota_de_venta;
use App\Http\Requests\Storenota_de_ventaRequest;
use App\Http\Requests\Updatenota_de_ventaRequest;

class NotaDeVentaController extends Controller
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
     * @param  \App\Http\Requests\Storenota_de_ventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storenota_de_ventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nota_de_venta  $nota_de_venta
     * @return \Illuminate\Http\Response
     */
    public function show(nota_de_venta $nota_de_venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nota_de_venta  $nota_de_venta
     * @return \Illuminate\Http\Response
     */
    public function edit(nota_de_venta $nota_de_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatenota_de_ventaRequest  $request
     * @param  \App\Models\nota_de_venta  $nota_de_venta
     * @return \Illuminate\Http\Response
     */
    public function update(Updatenota_de_ventaRequest $request, nota_de_venta $nota_de_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nota_de_venta  $nota_de_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(nota_de_venta $nota_de_venta)
    {
        //
    }
}
