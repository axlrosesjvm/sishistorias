<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    //
    protected $table='historia';
    protected $primaryKey='idhistoria';
    public $timestamps=false;

    protected $fillable=[
    	'nombre'    
    ];

    protected $guarded=[];
}
