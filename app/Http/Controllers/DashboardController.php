<?php

namespace App\Http\Controllers;

use App\Models\Toner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $previousYear = now()->subYear();

        return $previousYear; */
        $black = Toner::select('toners.id as toner_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id')
                        ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                        ->join('colors','toners.color_id','=','colors.id')
                        ->where('color_name','LIKE', '%black%')
                        ->sum('quantity_left');

        $cyan = Toner::select('toners.id as toner_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id')
                        ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                        ->join('colors','toners.color_id','=','colors.id')
                        ->where('color_name','LIKE', '%cyan%')
                        ->sum('quantity_left');

        $magenta = Toner::select('toners.id as toner_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id')
                        ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                        ->join('colors','toners.color_id','=','colors.id')
                        ->where('color_name','LIKE', '%magenta%')
                        ->sum('quantity_left');

        $yellow = Toner::select('toners.id as toner_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id')
                        ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                        ->join('colors','toners.color_id','=','colors.id')
                        ->where('color_name','LIKE', '%yellow%')
                        ->sum('quantity_left');

        /* $tonerYear =  */

        /* $black = Toner::where('color_id',1)->sum('quantity_left'); */
        return [$black,$cyan,$yellow,$magenta];
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
        //
    }
}
