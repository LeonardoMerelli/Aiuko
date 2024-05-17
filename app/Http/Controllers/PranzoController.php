<?php

namespace App\Http\Controllers;

use App\Models\pranzo;
use Illuminate\Http\Request;

class PranzoController extends Controller
{
    public function __construct() {
        $this->preferenzePranzo = new pranzo;
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
        return view("pranzo")
            ->with("prova", 20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->preferenzePranzo->salvaPreferenzePranzo($request->tempo, $request->intollerances);

        return redirect()->route('cena.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pranzo  $pranzo
     * @return \Illuminate\Http\Response
     */
    public function show(pranzo $pranzo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pranzo  $pranzo
     * @return \Illuminate\Http\Response
     */
    public function edit(pranzo $pranzo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pranzo  $pranzo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pranzo $pranzo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pranzo  $pranzo
     * @return \Illuminate\Http\Response
     */
    public function destroy(pranzo $pranzo)
    {
        //
    }
}
