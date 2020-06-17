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

class ProductosController extends Controller
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
	
        $mensaje="";

        $categorias = DB::table('categorias')
        ->where('estado_categoria','=','activo')
        ->get();

        return view('productos.crear',compact('mensaje','categorias'));
	}


    public function guardar(Request $request){

        //dd($request);

        
        $existe = DB::table('categorias')
        ->where('nombre_categoria','=',$request->nombre_categoria)
        ->pluck('nombre_categoria');

        if($existe=="[]"){
                $mensaje="exito";
                
                $producto = DB::table('productos')->insertGetId(
                    ['nombre_producto' => $request->nombre_producto, 'estado_producto' => $request->estado_producto, 'descripcion_producto' => $request->descripcion_producto, 'precio_producto' => $request->precio_producto, 'id_categoria' => $request->id_categoria, 'nombre_imagen' => $request->imagen_producto->getClientOriginalName()]
                );

                $request->imagen_producto->move('imagenes/productos',$request->imagen_producto->getClientOriginalName());
                
        }else{
                $mensaje="error";
        }

$categorias = DB::table('categorias')
        ->where('estado_categoria','=','activo')
        ->get();
        
        return view('productos.crear',compact('mensaje','categorias'));
    }

/*:::::::::::::::::::::::::::::::::::::::::::LISTA::::::::::::::::::::::::::::::::::::::::::::::::*/

   public function lista(){

    dd("lista");

        $productos = DB::table('productos')
        ->where('estado_producto','=','activo')
        ->leftJoin('modelos','modelos.id_modelo','=','productos.id_modelo')
        ->leftJoin('tipo_productos','tipo_productos.id_tipo_producto','=','modelos.id_tipo_producto')
        ->leftJoin('marcas','marcas.id_marca','=','modelos.id_marca')
        ->select('productos.id_producto','productos.precio_base','productos.codigo_producto','tipo_productos.nombre_tipo_producto','modelos.nombre_modelo','marcas.nombre_marca')
        ->get();

        $producto_especificaciones = DB::table('especificaciones')
        ->where('estado_especificacion','=','activo')
        ->leftJoin('producto_especificaciones','producto_especificaciones.id_especificacion','=','especificaciones.id_especificacion')
        ->leftJoin('clasificaciones','clasificaciones.id_clasificacion','=','especificaciones.id_clasificacion')
        ->select('producto_especificaciones.id_producto','especificaciones.nombre_especificacion','clasificaciones.nombre_clasificacion')
        ->get();


        

        foreach ($productos as $producto) {
            $especificaciones="";
            foreach ($producto_especificaciones as $producto_especificacion) {
                if($producto_especificacion->id_producto == $producto->id_producto){

                    $especificaciones= ", ".$producto_especificacion->nombre_clasificacion.": ".$producto_especificacion->nombre_especificacion.$especificaciones;
                }
            }
            $producto->especificaciones = $especificaciones;
        }


        return view('productos.lista',compact('productos'));
    }

    public function venta(){
        $ventas = DB::table('ventas')
        ->get();

        $prod_ventas = DB::table('producto_ventas')
        ->get();



        foreach ($ventas as $venta) {
            $c=0;
            foreach ($prod_ventas as $prod_venta) {
                if($venta->id_venta == $prod_venta->id_venta){
                    $c=$c+1;
                }
            }
            $venta->cantidad = $c;
        }

        //dd($ventas);

        return view('ventas.lista',compact('ventas'));
    }

}
