<?php

namespace App\Http\Controllers;

use App\Models\Toner;
use Illuminate\Http\Request;
use App\Models\TonerAssignement;
use Illuminate\Support\Facades\DB;

class TonerAssignementController extends Controller
{
    public function trackToner(Request $request){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $printers=DB::table('printers')
                    ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
                    ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
                    ->join('printer_models','printers.printer_model_id','=','printer_models.id')
                    ->get(); */


        $assignements = TonerAssignement::select('toner_assignements.id as assignement_id','toner_assignements.created_at as creation','toner_id','printer_id','serial_number','ip','quantity_assigned','employee_id','employee_name','matricule','printer_location_id','printer_location_name','printer_model_id','printer_model_name','printer_category_id','printer_category_name','color_id','color_name','toner_model_id','toner_model_name')
                            ->join('printers','toner_assignements.printer_id','=','printers.id')
                            ->join('toners','toner_assignements.toner_id','=','toners.id')
                            ->join('employees','toner_assignements.employee_id','=','employees.id')
                            ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
                            ->join('printer_models','printers.printer_model_id','=','printer_models.id')
                            ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
                            ->join('colors','toners.color_id','=','colors.id')
                            ->join('toner_models','toners.toner_model_id','=','toner_models.id')

                            ->get();

        /* dd($assignements); */
        
        return view('assignement.index',compact('assignements'));
                            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* dd($request); */
        $toner=Toner::where('id',$request->toner)->get();
        /* dd($toner[0]->quantity); */
        /* dd($this->$toner); */

        $toner[0]->quantity_left = $toner[0]->quantity_left - $request->quantity;
        $toner[0]->save();

        $assignement = new TonerAssignement();
        $assignement->quantity_assigned = $request->quantity;
        $assignement->printer_id = $request->printer;
        $assignement->employee_id = $request->employee;
        $assignement->toner_id = $request->toner;

        $assignement->save();

        return view('assignement.create');

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
