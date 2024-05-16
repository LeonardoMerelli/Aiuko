<?php

namespace App\Http\Controllers;

use App\Models\durata;
use Illuminate\Http\Request;

class DurataController extends Controller
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
        return view("durata");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->setup = 1;
        $user->save();

        return redirect()->route('attesa.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\durata  $durata
     * @return \Illuminate\Http\Response
     */
    public function show(durata $durata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\durata  $durata
     * @return \Illuminate\Http\Response
     */
    public function edit(durata $durata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\durata  $durata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, durata $durata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\durata  $durata
     * @return \Illuminate\Http\Response
     */
    public function destroy(durata $durata)
    {
        //
    }
}
