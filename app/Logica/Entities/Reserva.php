<?php

namespace bi\Entities;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //

    protected $table = 'reservas';

    public function cliente(){
        //$this->belongsTo('entitie', 'local_key', 'parent_key');
        return $this->belongsTo('bi\Entities\Persona','persona_id','id');
    }


}
