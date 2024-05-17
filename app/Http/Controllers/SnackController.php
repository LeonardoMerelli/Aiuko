<?php

namespace App\Http\Controllers;

use App\Models\snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function __construct() {
        $this->preferenzeSnack = new snack;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;
        $preferenzeSnack = snack::where('idUtente', $idUser)->select('faSpuntino', 'snackPreferiti', 'colazionePranzo', 'pranzoCena', 'pranzoCena', 'dopoCena')->get()->toArray()[0];

        return view('snack')
                ->with("preferenzeSnack", $preferenzeSnack);
    }

    
    public function store(Request $request)
    {
        $this->preferenzeSnack->salvaPreferenzeSnack($request->preferenze, $request->diet);

        return redirect()->route('colazione.create');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
