<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iteam;
class IteamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iteams = Iteam::all();

        return view('iteams.index', compact('iteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iteams.create');
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

        'iteam_name'=>'required',
        'iteam_price'=>'required',
        'iteam_discription'=>'required',
        'iteam_type'=>'required',
        'iteam_time'=>'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $imageName = rand().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $iteam = new Iteam([

            'iteam_name'=>$request->get('iteam_name'),
            'iteam_price'=>$request->get('iteam_price'),
            'iteam_discription'=>$request->get('iteam_discription'),
            'iteam_type'=>$request->get('iteam_type'),
            'iteam_time'=>$request->get('iteam_time'),
            //'image'=>$request->get('imageName')


        ]);



        $iteam->save();
        return redirect('/iteams')->with('success', 'iteam saved!');
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
        $iteam = Iteam::find($id);
        return view('iteams.edit', compact('iteam'));
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
        'iteam_name'=>'required',
        'iteam_price'=>'required',
        'iteam_discription'=>'required',
        'iteam_time'=>'required',
        ]);

        $iteam = Iteam::find($id);

     $iteam->iteam_name = $request->get('iteam_name');
     $iteam->iteam_price = $request->get('iteam_price');
     $iteam->iteam_discription = $request->get('iteam_discription');
     $iteam->iteam_time = $request->get('iteam_time');
     $iteam->save();

     return redirect('/iteams')->with('sucess','Iteam Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iteam = Iteam::find($id);
        $iteam->delete();

        return redirect('/iteams')->with('success', 'Iteam Deleted sucess!');
    }
}
