<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Professorat;
use Illuminate\Http\Request;

class ProfessoratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Obtenir tots els professors
        $professorat = Professorat::all();

        // Retornar la vista
        return view('Admin.professorat')->with('professorat',$professorat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.createProfessorat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professorat = new Professorat;

        //Assignem les dades del formulari per guardar-les
        $professorat-> name = $request->input('name');
        $professorat->surname = $request ->input('surname');
        $professorat->email = $request->input('email');

        //Guardem les dades a l'objecte creat

        $professorat->save();

        return redirect()->action([ProfessoratController::class,'index']);
    }

//     /**
//      * Display the specified resource.
//      */
    public function show($id)
    {
        $professorat = Professorat::find($id); //busca el professor per la id i el retorna a la vista de showProfessorat 
        return view('Admin.showProfessorat')->with('professorat',$professorat);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professorat $professorat, int $id)
    {
    
        $professorat = Professorat::find($id); //obtenim la id 

    
        return view('Admin.editProfessorat')->with('professorat', $professorat); // li passem la id a la vista perque ens mostri el professor que volem canviar
    }

//     /**
//      * Update the specified resource in storage.
//      */
    public function update(Request $request, $id)
    {
        $professorat = Professorat::find($id); // li diem que ens obtingui el Professorat amb aquesta id en concret 
        
         // Actualitza les dades del professor
        $professorat->name = $request->input('name');
        $professorat->surname = $request->input('surname');
        $professorat->email = $request->input('email');

        // Guarda el professor actualitzat
        $professorat->save();

   // Redireccionem a la vista de llistat de professors
   return redirect()->action([ProfessoratController::class,'index']);
    }

//     /**
//      * Remove the specified resource from storage.
//      */
    public function destroy($id)
    {   
        Professorat::destroy($id); // En aquest cas no cal obtindre l'objecte de professor sencer doncs podem eliminar-lo només coneixent la seva id
                                    // Seria com un DELETE FROM PROFESSORAT WHERE ID = $id

        return redirect()->action([ProfessoratController::class,'index']); //una vegada eliminat tornem a l'index perque ens mostri la taula sense aquell professor
    }
}
