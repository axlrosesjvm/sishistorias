<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use App\Listaescenas;
use App\Escena;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ListaescenasFormRequest;
use DB;

class ListaescenasController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

            
        public function create(){
        	return view("adminhistorias.historia.create");
    }
        public function store(HistoriaFormRequest $request){
        	$historia=new Historia;
        	$historia->nombre=$request->get('nombre');
        	$historia->save();

    
            return view('adminhistorias.personaje.create',["idhistoria"=>$historia->idhistoria]);
        	//return Redirect::to('adminhistorias/personaje',["idhistoria"=>$historia->idhistoria]););

    }
        public function show($id){
        	return view("adminhistorias.historia.show",["historia"=>Historia::findOrFail($id)]);

    }
        public function edit($id){
            $Escena=Escena::findOrFail($id);
            $escenas=DB::table('escena')->where('idhistoria','=',$Escena->idhistoria)->get();
        	return view("adminhistorias.Listaescenas.edit",["escena"=>Escena::findOrFail($id),"escenas"=>$escenas]);
    }
    
        public function update(ListaescenasFormRequest $request,$id){
        	$escena=Escena::findOrFail($id);
        	$escena->condicion='si';    
            $escena->condiciontexto=$request->get('condiciontexto');
            $escena->idcaminoa=$request->get('idcaminoa');
            $escena->idcaminob=$request->get('idcaminob');
        	$escena->update();
            $escenas=DB::table('escena')->where('idhistoria','=',$escena->idhistoria)->get();  
            
            return view('adminhistorias.listaescenas.index',["idhistoria"=>$escena->idhistoria,"escenas"=>$escenas]);

    }
    public function destroy($id){    
        $historia=Historia::findOrFail($id);
       $historia->delete();
        return Redirect::to('adminhistorias/historia');
    }
}
