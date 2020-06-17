<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;

class CategoriasController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

/*:::::::::::::::::::::::::::::::::::::::::::CREAR::::::::::::::::::::::::::::::::::::::::::::::::*/

	public function crear(){
		//dd("crear");

    

        return view('categorias.crear');
	}

/*:::::::::::::::::::::::::::::::::::::::::::GUARDAR:::::::::::::::::::::::::::::::::::::::::::::::*/

    public function guardar(Request $request){
        //dd($request->imagen_sucursal->getClientOriginalName());

        //dd($request);


        $existe = DB::table('categorias')
        ->where('nombre_categoria','=',$request->nombre_categoria)
        ->pluck('nombre_categoria');

        if($existe=="[]"){
                $mensaje="exito";
                
                $id_categoria = DB::table('categorias')->insertGetId(
                    ['nombre_categoria' => $request->nombre_categoria, 'estado_categoria' => $request->estado_categoria]
                );

                
        }else{
                $mensaje="error";
        }

        return view('categorias.crear',compact('mensaje'));




    }

/*:::::::::::::::::::::::::::::::::::::::::::LISTA::::::::::::::::::::::::::::::::::::::::::::::::*/

   public function lista(){

        dd("lista");

        $categorias = DB::table('categorias')
        ->where('estado_categoria','=','activo')
        ->get();

        return view('categorias.lista',compact('categorias'));
    }



}
