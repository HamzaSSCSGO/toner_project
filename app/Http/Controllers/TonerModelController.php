<?php

namespace App\Http\Controllers;

use App\Models\TonerModel;
use Illuminate\Http\Request;

class TonerModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tonerModels= TonerModel::all();
        /* $colorsArray=$colors->toArray(); */
        /* dd($tonerModel); */
        return view('toner_model.index',compact('tonerModels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $model = new TonerModel();
        $model->toner_model_name = $request->name;
        /* $model->quantity=$request->quantity; */
        $model->save();

        return view('toner_model.create');
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
        $tonerModel = TonerModel::find($id);

        return view('toner_model.update',compact('tonerModel'));
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
        $tonerModel = TonerModel::find($id);
        $tonerModel->toner_model_name = $request->name;
        $tonerModel->save();

        return redirect('/index-toner-model');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* dd($id); */
        $tonerModel = TonerModel::find($id);
        $tonerModel->delete();
        return redirect('/index-toner-model');
    }
}
