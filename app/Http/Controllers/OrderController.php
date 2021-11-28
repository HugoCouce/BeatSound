<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['orders'] = Order::paginate(5);
        return view('order.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosOrder = request()->only('usuario_dni');
        $datosOrderDetails = request()->except('_token', 'usuario_dni');

        Order::insert($datosOrder);
        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        $datos = DB::table('orders')
            ->join('orders_details', 'orders.pedido_id', '=', 'orders_details.pedido_id')
            ->select('orders.pedido_id', 'orders.usuario_dni', 'orders_details.nombre_album', 'orders_details.cantidad', 'orders_details.precio_total', 'orders_details.fecha_compra')
            ->where('orders.pedido_id', '=', $id)
            ->get();

        return view('order.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function customerOrders($id)
    {

        $datos = DB::table('orders')
            ->join('orders_details', 'orders.pedido_id', '=', 'orders_details.pedido_id')
            ->select('orders.pedido_id', 'orders.usuario_dni', DB::raw('group_concat(orders_details.nombre_album separator ", ") as nombre_album'), db::raw('sum(orders_details.cantidad) as cantidad'), db::raw('sum(orders_details.precio_total) as precio_total'), 'orders_details.fecha_compra')
            ->where('orders.usuario_dni', '=', $id)
            ->groupBy('orders.pedido_id', 'orders.usuario_dni', 'orders_details.fecha_compra')
            ->get();

        return view('order.customers', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
