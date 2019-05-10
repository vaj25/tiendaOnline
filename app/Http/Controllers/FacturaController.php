<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarritoProducto;
use App\Models\Producto;
use App\Models\Factura;
use App\Models\Carrito;

class FacturaController extends Controller
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
      $factura = new Factura();

      $factura->codigo_factura = $factura->generarCodigo(5);
      $factura->total_factura = $request->total;
      $factura->subtotal_factura = $request->subtotal;
      $factura->id_carrito = $request->carrito;

      if ($factura->save()) {
        return response()->json(array('success' => true), 200);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_carrito
     * @return \Illuminate\Http\Response
     */
    public function show($id_carrito)
    {
      $carrito_producto = CarritoProducto::where('id_carrito', $id_carrito)->get();

      $total = 0;
      foreach ($carrito_producto as $car_prod) {
        $producto = Producto::where('id_producto', $car_prod->id_producto )->first();
        $total += $producto->precio_producto * $car_prod->cantidad_carrito_producto;
      }

      $col = collect(['total' => $total, 'subtotal' => $total, 'carrito' => $id_carrito]);

      return $col;
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
