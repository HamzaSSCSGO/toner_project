<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Toner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toners=DB::table('toners')
                ->select('toners.id as toners_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id')
                ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                ->join('colors','toners.color_id','=','colors.id')
                ->get();
        /* dd($toners); */
        /* $toners=Toner::all(); */
        /* $colorNames=Color::where('id',$toners->color_id)->get('name'); */
        /* dd($toners); */
        
        return view('toner.index',compact('toners')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* dd($request); */
        /* dd($request->color); */
        $toner = new Toner();
        $toner->color_id = $request->color;
        $toner->toner_model_id = $request->tonerModel;
        $toner->quantity_left=$request->quantity;
        $toner->save(); 
        return view('toner.create');
    }

    public function add(Request $request){
        /* dd($request); */
        $toner=Toner::where([['toner_model_id',$request->tonerModel],['color_id',$request->color]])->get();
        /* dd($toner[0]->quantity); */
        $toner[0]->quantity_left = $toner[0]->quantity_left + $request->quantity;
        $toner[0]->save();
        return view('toner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $toner = Toner::find($id);
        /* dd($toner, $id); */
        $toner->delete();
        return redirect('/toner-index');
    }
}
