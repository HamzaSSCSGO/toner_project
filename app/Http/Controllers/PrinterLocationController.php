<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrinterLocation;

class PrinterLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations=PrinterLocation::all();
        return view('printer.location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* dd($request); */
        $location = new PrinterLocation();
        /* dd($location); */
        $location->printer_location_name = $request->name;
        /* dd($location->location_name); */
        $location->save();
        return view('printer.location.create');
        
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
        $printerLocation = PrinterLocation::find($id);

        return view('printer.location.update',compact('printerLocation'));
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
        $printerLocation = PrinterLocation::find($id);
        $printerLocation->printer_location_name = $request->name;
        $printerLocation->save();

        return redirect('printer-location-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $printerLocation = PrinterLocation::find($id);
        $printerLocation->delete();

        return redirect('/printer-location-index');
    }
}
