<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printers = Printer::select('printers.id as printer_id','serial_number','ip','printer_location_id','printer_location_name','printer_category_id','printer_category_name','printer_model_id','printer_model_name','printer_image','printer_name')
                            ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
                            ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
                            ->join('printer_models','printers.printer_model_id','=','printer_models.id')
                            ->get();

        /* dd($printers); */

        return view('printer.index',compact('printers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* dd($request); */
        $input = $request->all();

        /* dd($input); */

        $destination_path = 'public/storage/printer';
        $image= $request->file('image');
        /* dd($image); */
        $image_name = $image->getClientOriginalName();
        /* dd($image_name); */
        $path = $request->file('image')->storeAs($destination_path,$image_name);
        /* dd($path); */

        $printer = new Printer();
        $printer->printer_name = $request->printer_name;
        $printer->serial_number =  $request->serialNumber;
        $printer->ip = $request->ip;
        $printer->printer_location_id = $request->printerLocation;
        $printer->printer_model_id = $request->printerModel;
        $printer->printer_category_id = $request->printerCategory;
        $printer->printer_image = $image_name;
        $printer->save();

        return view('printer.create');
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
        $printer = Printer::find($id);
        /* dd($printer); */
        return view('printer.update',compact('printer'));
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
        $printer = Printer::find($id);
        /* dd($printer); */
        $printer->printer_name = $request->printer_name;
        $printer->serial_number =  $request->serialNumber;
        $printer->ip = $request->ip;

        if($request->hasFile('image')){
            $destination_path = 'public/storage/printer';
            $image= $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $printer->printer_image = $image_name;

        }
        $printer->save();

        return redirect('/index-printer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $printer=Printer::find($id);
        $printer->delete();

        return redirect('/index-printer');
    }
}
