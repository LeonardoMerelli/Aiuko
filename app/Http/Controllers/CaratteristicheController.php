<?php

namespace App\Http\Controllers;

use App\Models\userCaratteristiche;
use Illuminate\Http\Request;

class IntolleranceController extends Controller
{
    public function __construct() {
        $this->userCaratteristiche = new userCaratteristiche;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;
        $caratteristicheUtente = userCaratteristiche::where('idUtente', $idUser)->pluck('caratteristica')->toArray();

        return view('caratteristiche')
            ->with('caratteristiche', $caratteristicheUtente);
    }

    public function store(Request $request)
    {
        $this->userCaratteristiche->salvaCaratteristicheUtente($request->caratteristiche);

        if($request->redirect == 'impostazioniPasto') {
            $user = auth()->user();
            $user->setup = true;
            $user->save();
        }
        return redirect()->route($request->redirect);
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
