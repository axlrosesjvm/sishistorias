<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Dialogo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DialogoFormRequest;
use DB;
class DialogoController extends Controller
{
    //  
    public function __construct(){
        $this->middleware('auth');
    }
        public function index(){   
                  //

                  //$personajes=DB::table('personaje')->where('idhistoria','=',38)->get();    

                    $personajes='asdfg';  

                return view('adminhistorias.dialogo.create',["personajes"=>$personajes]);
            }
        public function create(){
  
            return view("adminhistorias.dialogo.create");
    }
      public function store(DialogoFormRequest $request){
            
            $dialogo=new Dialogo;        
            $dialogo->idpersonaje=$request->get('idpersonaje');
            $dialogo->idescena=$request->get('idescena');
            $dialogo->texto=$request->get('texto');
            $dialogo->save();
            $personajes=DB::table('personaje')->where('idhistoria','=',$request->get('idhistoria'))->get();
            return view('adminhistorias.dialogo.create',["personajes"=>$personajes,"idescena"=>$dialogo->idescena,"idhistoria"=>$request->get('idhistoria')]);
    
            //return view('adminhistorias.personaje.index',["idhistoria"=>$personaje->idhistoria]);
            //return Redirect::to('adminhistorias/historia');

    }
            public function edit($idhistoria){
            //return view('adminhistorias.escena.create',["idhistoria"=>$idhistoria]);
            //return Redirect::to('adminhistorias/historia');
                return view('adminhistorias.escena.create',["idhistoria"=>$idhistoria]);
             //return view('adminhistorias.escena.create',[$idhistoria]);
    }
}
