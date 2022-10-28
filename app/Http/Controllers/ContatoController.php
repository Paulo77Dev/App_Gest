<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        //var_dump($_GET); metodo get
        var_dump($_POST); //metodo post
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
