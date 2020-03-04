<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class CostumerController extends Controller
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
        return view('costumers.create');
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

            'costumer_id'=>'required',
            'costumer_table'=>'required',
            'costumer_image'=>'required',
            'costumer_price'=>'required',
            'costumer_discription'=>'required',
            'costumer_username'=>'required'
        ]);

        $costumer = new Costumer([

            'costumer_id' => $request->get('costumer_id'),
            'costumer_table' => $request->get('costumer_table'),
            'costumer_image' => $request->get('costumer_image'),
            'costumer_price' => $request->get('costumer_price'),
            'costumer_discription' => $request->get('costumer_discription'),
            'costumer_username' => $request->get('costumer_username')

        ]);
        $contact->save();
        return redirect('/costumers')->with('success', 'Costumer Iteam Has bees saved!');
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
