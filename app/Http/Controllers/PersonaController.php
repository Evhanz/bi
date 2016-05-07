<?php

namespace App\Http\Controllers;

use bi\Repository\PersonaRep;


class PersonaController extends Controller
{

    public $personaRep;


    public function __construct(PersonaRep $personaRep)
    {
        $this->personaRep = $personaRep;
    }


    public function all(){

        $personas = $this->personaRep->all();

        return \Response::json($personas);

    }





}
