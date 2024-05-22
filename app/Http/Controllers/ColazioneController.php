<?php

namespace App\Http\Controllers;

use App\Models\colazione;
use Illuminate\Http\Request;

class ColazioneController extends Controller
{
    public function __construct() {
        $this->colazione = new colazione;
    }
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
        $preferenzeColazione = colazione::where('idUtente', $idUser)->select('faColazione', 'alimentiPreferiti')->get()->toArray();

        return view("colazione")
                ->with("preferenzeColazione", $preferenzeColazione);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->colazione->salvaInfoColazione($request->preferenze, $request->diet);

        return redirect()->route('pranzo.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\colazione  $colazione
     * @return \Illuminate\Http\Response
     */
    public function show(colazione $colazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\colazione  $colazione
     * @return \Illuminate\Http\Response
     */
    public function edit(colazione $colazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\colazione  $colazione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colazione $colazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\colazione  $colazione
     * @return \Illuminate\Http\Response
     */
    public function destroy(colazione $colazione)
    {
        //
    }
}
