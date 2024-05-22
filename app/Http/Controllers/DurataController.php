<?php

namespace App\Http\Controllers;

use App\Models\durata;
use App\Models\User;
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
        $idUser = auth()->user()->idUtente;
        $infoDurata = User::where('idUtente', $idUser)->select('giornoInizioDieta', 'durataPiano')->get()->toArray();

        return view("durata")
            ->with("infoDurata", $infoDurata);
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

        $user->update([
            'durataPiano' => $request->tempo,
            'giornoInizioDieta' => $request->dataInizio,
        ]);

        return redirect()->route('snack.create');
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
