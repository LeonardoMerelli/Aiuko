<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnackController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        $idUser = auth()->user()->idUtente;

        return view('snack');
    }

    
    public function store(Request $request)
    {
        dd($request);
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
