<?php

namespace App\Http\Controllers;

use App\Models\sport;
use App\Models\User;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function __construct() {
        $this->sportUtente = new sport;
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
        $preferenzeSport = User::where('idUtente', $idUser)->select('faSport', 'livelloAttivita')->get()->toArray();

        return view("sport")
            ->with("preferenzeSport", $preferenzeSport);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->sportUtente->salvaSportUtente($request->diet, $request->contenutiInputData, $request->contenutiInputSelectLivello);

        return redirect()->route('calendario.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(sport $sport)
    {
        //
    }
}
