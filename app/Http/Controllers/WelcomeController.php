<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $productos = DB::table('productos')
        ->where('estado_producto','=','activo')
        ->leftJoin('categorias','categorias.id_categoria','=','productos.id_categoria')
        ->get();


        return view('welcome',compact('productos'));
    }

    public function guardarVenta(Request $request)
    {

        
        $productos = json_decode($request->productos);
        //dd($productos);

        

        $id_venta = DB::table('ventas')->insertGetId(
            ['id_user' => 1]
        );


        foreach ($productos as $producto) {
            DB::table('producto_ventas')->insert(
                ['id_venta' => $id_venta, 'id_producto' => $producto->id_producto, 'cantidad' => $producto->cantidad_producto]
            );
        }


        $productos = DB::table('productos')
        ->where('estado_producto','=','activo')
        ->leftJoin('categorias','categorias.id_categoria','=','productos.id_categoria')
        ->get();

        return view('welcome',compact('productos'));
    }
}
