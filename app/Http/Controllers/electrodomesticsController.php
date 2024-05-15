<?php

namespace App\Http\Controllers;

use App\Models\electiodomestic;
use Illuminate\Http\Request;

class ElectrodomesticsController extends Controller
{
    public function __construct() {
        $this->electrodomestic = new electiodomestic;
    }

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
        $elettrodomesticiUtente = electiodomestic::where('idUtente', $idUser)->pluck('elettrodomestico')->toArray();

        return view("elettrodomestici")
            ->with("elettrodomestici", $elettrodomesticiUtente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->electrodomestic->salvaElettrodomestici($request->elettrodomestici);

        return redirect()->route('intollerances.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
