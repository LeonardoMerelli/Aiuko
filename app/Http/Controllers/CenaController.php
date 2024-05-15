<?php

namespace App\Http\Controllers;

use App\Models\cena;
use Illuminate\Http\Request;

class CenaController extends Controller
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
        return view("cena");
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
     * @param  \App\Models\cena  $cena
     * @return \Illuminate\Http\Response
     */
    public function show(cena $cena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cena  $cena
     * @return \Illuminate\Http\Response
     */
    public function edit(cena $cena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cena  $cena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cena $cena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cena  $cena
     * @return \Illuminate\Http\Response
     */
    public function destroy(cena $cena)
    {
        //
    }
}
