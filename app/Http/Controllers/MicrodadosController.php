<?php

namespace App\Http\Controllers;

use App\Microdados;
use Illuminate\Http\Request;

class MicrodadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($coluna = '')
    {
        //dd($coluna);
        if ($coluna != '') {

            return Microdados::where($_GET)->get()->pluck($coluna);
        }
        return Microdados::where($_GET)->get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Microdados  $microdados
     * @return \Illuminate\Http\Response
     */
    public function show(Microdados $microdados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Microdados  $microdados
     * @return \Illuminate\Http\Response
     */
    public function edit(Microdados $microdados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Microdados  $microdados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Microdados $microdados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Microdados  $microdados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Microdados $microdados)
    {
        //
    }
}
