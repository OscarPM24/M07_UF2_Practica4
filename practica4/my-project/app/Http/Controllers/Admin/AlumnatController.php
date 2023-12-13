<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumnat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnat = DB::table('alumnat')->get();
 
        return view('Admin.alumnat', ['alumnat' => $alumnat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.createAlumnat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnat = new Alumnat;
        // Assignació de dades del formulari a variables
        $alumnat->name = $request->input('name');
        $alumnat->surname = $request->input('surname');
        $alumnat->email = $request->input('email');

        // Guardem la info de l'alumne a la taula de la bbdd
        $alumnat->save();

        return view('Admin.alumnat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnat $alumnat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnat $alumnat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnat $alumnat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnat $alumnat)
    {
        //
    }
}
