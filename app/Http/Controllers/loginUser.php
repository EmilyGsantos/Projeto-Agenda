<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginUser extends Controller
{
    public function index()
    {
       return view('login');
    }

    public function Auth(Request $request)
    {
        if((['email' == $emailUsuario && 'senha'== $senhaUsuario ]))
        {
            dd('Logou');
        }else{
            dd('não logou');
        }
    }//fim da função
}//fim da classe
