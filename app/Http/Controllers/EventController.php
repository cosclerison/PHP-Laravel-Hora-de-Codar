<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        $nome       = "clerison";
        $idade      = 40;
        $profissao  = "Developer";
        $arr        = [10,20,30,40,50];
        $nomes      = [
                        "Clerison",
                        "Juliana",
                        "Bianca",
                        "Maggie",
                    ];

        // nome do arquivo da view
        return view('welcome', 
        [
            'nome'      => $nome, 
            'idade'     => $idade,
            'profissao' => $profissao,
            'arr'       => $arr,
            'nomes'     => $nomes
        ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
