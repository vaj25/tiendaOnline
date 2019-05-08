<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarritoProducto;
use App\Models\Carrito;

class CarritoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $carrito_producto = new CarritoProducto;

      $carrito = Carrito::where('id_cliente', $request->cliente)
                        ->where('estado_carrito', 1)->get();

      $id_carrito = 0;
      if ($carrito->count() > 0) {
        $id_carrito = $carrito->first()->id_carrito;
      } else {
        $carrito = new Carrito;

        $carrito->id_cliente = $request->cliente;
        $carrito->estado_carrito = true;

        $carrito->save();

        $id_carrito = $carrito->id_carrito;
      }
      
      $carrito_producto->id_carrito = $id_carrito;
      $carrito_producto->id_producto = $request->producto;
      $carrito_producto->cantidad_carrito_producto = $request->cantidad;

      if ($carrito_producto->save()) {
        return response()->json(array('success' => true), 200);
      }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
      $carrito = Carrito::where('id_cliente', $id_cliente)
                        ->where('estado_carrito', 1)->first();

      $carrito_producto = CarritoProducto::where('id_carrito', $carrito->id_carrito)->get();

      return $carrito_producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
