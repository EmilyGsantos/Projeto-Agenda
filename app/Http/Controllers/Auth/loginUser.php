<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// passando o controlador da model
use App\Models\cadastrarUserModel;

class loginUser extends Controller
{
    public function index()
    {
       return view('paginas.login');
    }

    public function store(Request $request)
    {
        if((['email' == $emailUsuario && 'senha'== $senhaUsuario ]))
        {
            return redirect('paginas.agenda');
        }else{
            dd('não logou');
        }
    }//fim da função
}//fim da classe
