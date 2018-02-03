<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Personaje;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonajeFormRequest;
use DB;


class PersonajeController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
        public function index($idhistorias){       
        		return view('adminhistorias.personaje.create',[$idhistorias]);
        	}
        public function create(){
        	return view("adminhistorias.personaje.create");
    }
      public function store(PersonajeFormRequest $request){
        	
        	$personaje=new Personaje;
			$personaje->idhistoria=$request->get('idhistoria');
        	$personaje->nombre=$request->get('nombre');
        	$personaje->save();

    		return view('adminhistorias.personaje.create',["idhistoria"=>$personaje->idhistoria]);
            //return view('adminhistorias.personaje.index',["idhistoria"=>$personaje->idhistoria]);
        	//return Redirect::to('adminhistorias/historia');

    }
            public function edit($idhistoria){
            return view('adminhistorias.escena.create',["idhistoria"=>$idhistoria]);

        	//return Redirect::to('adminhistorias/historia');
    }



}
