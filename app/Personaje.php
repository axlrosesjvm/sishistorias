<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    //
        protected $table='personaje';
    protected $primaryKey='idpersonaje';
    public $timestamps=false;

    protected $fillable=[
    	'idhistoria',
    	'nombre',
    	'detalle'
    ];

    protected $guarded=[];
}
