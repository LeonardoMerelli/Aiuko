<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userCaratteristiche;
use Illuminate\Http\Request;

class CaratteristicheController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;
        

        return view('caratteristicheUser');
            
    }

    public function store(Request $request)
    {
        $request->validate([
            'eta' => ['required', 'integer', 'max:120', 'min:10'],
            'altezza' => ['required', 'integer','max:230','min:110'],
            'peso' => ['required', 'integer', 'max:250', 'min:0'],
            'attivita' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string', 'max:255'],
        ]);

        auth()->user()->update([
            'eta' => $request->eta,
            'peso' => $request->peso,
            'attivitaGiornaliera' => $request->attivita,
            'genere' => $request->genere,
            'altezza' => $request->altezza,
        ]);

        return redirect()->route('home');
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
