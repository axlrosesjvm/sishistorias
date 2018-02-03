<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Historia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\HistoriaFormRequest;
use DB;

class HistoriaController extends Controller
{
    //
    public function __construct(){

    }
        public function index(Request $request){
        	if($request)
        	{
        		$query=trim($request->get('searchText'));
        		$historias=DB::table('historia')->where('nombre','LIKE','%'.$query.'%')
      ->paginate(7);
        		return view('adminhistorias.historia.index',["historias"=>$historias,"searchText"=>$query]);

        	}

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
        	return view("adminhistorias.historia.edit",["historia"=>Historia::findOrFail($id)]);
    }
        public function update(HistoriasFormRequest $request,$id){
        	$historia=Historia::findOrFail($id);
        	$historia->nombre=$request->get('nombre');
        	$historia->update();
        	return Redirect::to('adminhistorias/historia');

    }
    public function destroy($id){
    
        $historia=Historia::findOrFail($id);
       $historia->delete();
        return Redirect::to('adminhistorias/historia');
    }

}
