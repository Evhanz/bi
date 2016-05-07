<?php

namespace bi\Entities;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    //
    protected $table='paquete';


    /*esto es por que cada paquete va asignador un guia*/
    public function guia(){
        //$this->belongsTo('entitie', 'local_key', 'parent_key');
        return $this->belongsTo('bi\Entities\Persona','guia_id','id');
    }


}
