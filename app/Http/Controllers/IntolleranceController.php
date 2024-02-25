<?php

namespace App\Http\Controllers;

use App\Models\userIntollerances;
use Illuminate\Http\Request;

class IntolleranceController extends Controller
{
    public function __construct() {
        $this->userIntollerances = new userIntollerances;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;
        $intolleranzeUtente = userIntollerances::where('idUtente', $idUser)->pluck('intolleranza')->toArray();

        return view('intollerances')
            ->with('intolleranze', $intolleranzeUtente);
    }

    public function store(Request $request)
    {
        $this->userIntollerances->salvaIntolleranzeUtente($request->intollerances);

        if($request->redirect == 'impostazioniPasto') {
            $user = auth()->user();
            $user->setup = true;
            $user->save();
        }
        return redirect()->route('caratteristiche.create');
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
