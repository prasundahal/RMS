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

        'order_id'=>'required',
        'order_name'=>'required',
        'order_image'=>'required',
        'order_price'=>'required',
        'order_discription'=>'required',
        'order_type'=>'required',
        'order_time'=>'required',
        'order_discount'=>'required'
        ]);

        $order = new order([

            'order_id'=>$request->get('order_id'),
            'order_name'=>$request->get('order_name'),
            'order_image'=>$request->get('order_image'),
            'order_price'=>$request->get('order_price'),
            'order_discription'=>$request->get('order_discription'),
            'order_type'=>$request->get('order_type'),
            'order_time'=>$request->get('order_time'),
            'order_discount'=>$request->get('order_discount')




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
        'order_id'=>'required',
        'order_name'=>'required',
        'order_image'=>'required',
        'order_price'=>'required',
        'order_discription'=>'required',
        'order_type'=>'required',
        'order_time'=>'required',
        'order_discount'=>'required'
        ]);

        $order = order::find($id);

     $order->order_id = $request->get('order_id');
     $order->order_name = $request->get('order_name');
     $order->order_image = $request->get('order_image');
     $order->order_price = $request->get('order_price');
     $order->order_discription = $request->get('order_discription');
     $order->order_type = $request->get('order_type');
     $order->order_time = $request->get('order_time');
     $order->order_discount = $request->get('order_discount');
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
