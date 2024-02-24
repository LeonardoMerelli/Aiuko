<?php

namespace App\Http\Controllers;

use App\Models\ch;
use App\Models\userDiets;
use Illuminate\Http\Request;

class DietController extends Controller
{
    public function __construct() {
        $this->userDiets = new userDiets;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;
        $dieteUtente = userDiets::where('idUtente', $idUser)->pluck('dieta')->toArray();

        return view('diets')
            ->with('diete', $dieteUtente);
    }

    public function store(Request $request)
    {
        $this->userDiets->salvaDieteUtente($request->diet);

        return redirect()->route('intollerances.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show(diet $diet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(diet $diet)
    {
        //
    }
}
