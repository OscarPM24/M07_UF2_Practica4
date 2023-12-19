<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumnat;
use Illuminate\Http\Request;

class AlumnatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnat = Alumnat::all();
 
        return view('Admin.alumnat')->with('alumnat', $alumnat); 
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

        // Redirecció a la funció index() 
        return redirect()->action([AlumnatController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $alumne = Alumnat::find($request->input('id'));
        
        return view('Admin.showAlumnat')->with('alumne', $alumne);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumne = Alumnat::find($id);

        return view('Admin.editAlumnat')->with('alumne', $alumne);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumnat = Alumnat::find($id);

        // Assignació de dades del formulari a variables
        $alumnat->name = $request->input('name');
        $alumnat->surname = $request->input('surname');
        $alumnat->email = $request->input('email');

        // Guardem la info de l'alumne a la taula de la bbdd
        $alumnat->save();

        // Redirecció a la funció index() 
        return redirect()->action([AlumnatController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Alumnat::destroy($id);

         // Redirecció a la funció index() 
         return redirect()->action([AlumnatController::class, 'index']);
    }
}
