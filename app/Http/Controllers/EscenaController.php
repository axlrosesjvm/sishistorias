<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Escena;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EscenaFormRequest;
use DB;
class EscenaController extends Controller
{
        //
    public function __construct(){
        $this->middleware('auth');
    }
        public function index($idhistorias){       
                return view('adminhistorias.escena.create',[$idhistorias]);
            }
        public function create(){
            return view("adminhistorias.escena.create");
    }
      public function store(EscenaFormRequest $request){
            
            $escena=new Escena;        
            $escena->titulo=$request->get('titulo');
            if(Input::hasFile('imagen')){
                $file=Input::file('imagen');
                $file->move(public_path().'/imagenes/escenas/',$file->getClientOriginalName());
                $escena->imagen=$file->getClientOriginalName();
            }
            $escena->idhistoria=$request->get('idhistoria');
            $escena->save();
            $personajes=DB::table('personaje')->where('idhistoria','=',$request->get('idhistoria'))->get();
            return view('adminhistorias.dialogo.create',["personajes"=>$personajes,"idescena"=>$escena->idescena,"idhistoria"=>$request->get('idhistoria')]);
            //return view('adminhistorias.dialogo.create');
            //return view('adminhistorias.personaje.index',["idhistoria"=>$personaje->idhistoria]);
            //return Redirect::to('adminhistorias/historia');
   //return view('adminhistorias.dialogo.create',["idhistoria"=>$request->get('idhistoria')],["idescena"=>$escena->idescena]);
    }
            public function edit($idhistoria){
        
  $escenas=DB::table('escena')->where('idhistoria','=',$idhistoria)->get();  
            
            return view('adminhistorias.listaescenas.index',["idhistoria"=>$idhistoria,"escenas"=>$escenas]);
           // return Redirect::to('adminhistorias/historia');
    }

}
