<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dialogo extends Model
{
    //
        protected $table='dialogo';
    protected $primaryKey='iddialogo';
    public $timestamps=false;

    protected $fillable=[
    	'idpersonaje',
    	'idescena',
    	'texto'	
    ];

    protected $guarded=[];
}
