<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Iteam;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([

        'table_number'=>'required',
        'order_name'=>'required',
        'order_image'=>'required',
        'order_price'=>'required'

        ]);

        $order = new order([

            'table_number'=>$request->get('table_number'),
            'order_name'=>$request->get('order_name'),
            'order_image'=>$request->get('order_image'),
            'order_price'=>$request->get('order_price')





        ]);
        $order->save();
        return redirect('/orders')->with('success', 'order saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::find($id);
        return view('orders.edit', compact('order'));
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
        $request->validate([
        'table_number'=>'required',
        'order_name'=>'required',
        'order_image'=>'required',
        'order_price'=>'required',

        ]);

        $order = order::find($id);

     $order->table_number = $request->get('table_number');
     $order->order_name = $request->get('order_name');
     $order->order_image = $request->get('order_image');
     $order->order_price = $request->get('order_price');

     $order->save();

     return redirect('/orders')->with('sucess','order Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id);
        $order->delete();

        return redirect('/orders')->with('success', 'order Deleted sucess!');
    }
}
