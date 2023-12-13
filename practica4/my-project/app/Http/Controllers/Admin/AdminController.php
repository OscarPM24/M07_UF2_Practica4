<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function usuaris(Request $request) {
        $admin_email = 'admin@gmail.com';
        $admin_password = '1234';

        $email = $request->input('email');
        $password = $request->input('password');
        if ($admin_email == $email && $admin_password == $password) return view('Admin.admin');
        else return view('signin')->with('title',"Iniciar Sessió de l'Usuari");;
    }

    public function usuaris2() {
        return view('Admin.admin');
    }

    public function centres() {
        $centres = [];

        array_push($centres, ['id'=>'1','name'=>'Institut TIC DE Barcelona','address'=>'carrer noseque','cp'=>'08018','city'=>'barcelona']);
        array_push($centres, ['id'=>'2','name'=>'Institut Joan dAustria','address'=>'carrer noseque2','cp'=>'08016','city'=>'barcelona']);
                
        return view('Admin.centres')->with('centres', $centres);
    }

    public function alumnat() {
        $alumnat = [];

        array_push($alumnat, ['id'=>'1','name'=>'oscar','surname'=>'perez','rol'=>'alumnat','email'=>'oscar@gmail.com']);
        array_push($alumnat, ['id'=>'1','name'=>'adria','surname'=>'garcia','rol'=>'alumnat','email'=>'adria@gmail.com']);
        array_push($alumnat, ['id'=>'1','name'=>'gemma','surname'=>'garrigosa','rol'=>'alumnat','email'=>'gemma@gmail.com']);
        array_push($alumnat, ['id'=>'1','name'=>'joana','surname'=>'lin','rol'=>'alumnat','email'=>'joana@gmail.com']);
                
        return view('Admin.alumnat')->with('alumnat', $alumnat); 
    }


    public function professorat() {
        $professorat = [];

        array_push($professorat, ['id'=>'1','name'=>'roger','surname'=>'sobrino','rol'=>'professorat','email'=>'oscar@gmail.com']);
        array_push($professorat, ['id'=>'1','name'=>'adria','surname'=>'garcia','rol'=>'professorat','email'=>'adria@gmail.com']);
        array_push($professorat, ['id'=>'1','gemma'=>'oscar','surname'=>'garrigosa','rol'=>'professorat','email'=>'gemma@gmail.com']);
        array_push($professorat, ['id'=>'1','joana'=>'oscar','surname'=>'lin','rol'=>'professorat','email'=>'joana@gmail.com']);
                
        return view('Admin.professorat')->with('professorat', $professorat); 
    }
}