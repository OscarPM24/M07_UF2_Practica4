<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centre;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centres = Centre::all();

        return view('Admin.centres')->with('centres', $centres);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.createCentre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $centre = new Centre();

        $centre->name = $request->input('name');
        $centre->address = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');

        $centre->save();

        return redirect()->route('indexCentres');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // mostra les dades cercades per id
        $centre = Centre::find($request->input('result'));

        if($centre == null) { return view('Admin.error'); }
        return view('Admin.showCentre')->with('centre', $centre);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centre $centre)
    {
        // form view para editar
        return view ('Admin.editCentre')->with('centre', $centre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // actualitza les dades a la bd i retorna a index
        $update = Centre::find($id);
        $update->name = $request->input('name');
        $update->address = $request->input('address');
        $update->cp = $request->input('cp');
        $update->city = $request->input('city');

        $update->save();
        
        return redirect()->route('indexCentres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // esborra de la taula i retorna index

        $centre = Centre::find($id);

        $centre->delete();

        return redirect()->route('indexCentres');
    }
}
