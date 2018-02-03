<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escena extends Model
{
    //
    protected $table='escena';
    protected $primaryKey='idescena';
    public $timestamps=false;

    protected $fillable=[
    	'imagen',
    	'titulo',
    	'condicion',
    	'condiciontexto',
        'idhistoria',
    	'idcaminoa',
    	'idcaminob'  	
    ];

    protected $guarded=[];
}
