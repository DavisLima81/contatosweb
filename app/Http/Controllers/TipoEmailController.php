<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoEmailRequest;
use App\Http\Requests\UpdateTipoEmailRequest;
use App\Models\TipoEmail;

class TipoEmailController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoEmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoEmailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEmail  $tipoEmail
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEmail $tipoEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEmail  $tipoEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEmail $tipoEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoEmailRequest  $request
     * @param  \App\Models\TipoEmail  $tipoEmail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoEmailRequest $request, TipoEmail $tipoEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEmail  $tipoEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEmail $tipoEmail)
    {
        //
    }
}
