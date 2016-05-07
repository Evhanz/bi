<?php
/**
 * Created by PhpStorm.
 * User: Evhanz-PC
 * Date: 06/05/2016
 * Time: 11:29
 */

namespace bi\Repository;

use bi\Entities\Persona;


class PersonaRep
{
    public function all(){

        $personas = Persona::all();
        return $personas;

    }




}