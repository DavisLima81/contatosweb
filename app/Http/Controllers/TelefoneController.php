<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelefoneRequest;
use App\Http\Requests\UpdateTelefoneRequest;
use App\Models\Telefone;

class TelefoneController extends Controller
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
     * @param  \App\Http\Requests\StoreTelefoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTelefoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show(Telefone $telefone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefone $telefone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTelefoneRequest  $request
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTelefoneRequest $request, Telefone $telefone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefone $telefone)
    {
        //
    }
}
