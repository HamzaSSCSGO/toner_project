<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Toner;
use App\Models\Department;
use App\Models\TonerModel;
use Illuminate\Http\Request;
use App\Models\TonerAssignement;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startDate1= Carbon::now()->subYear();
        $endDate1 = Carbon::now();
        
        $departments = Department::all();

        /* foreach ($departments as $department){

        } */


        
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

        /* toner moins 1 an */

        
        $tonerProduction1an = TonerAssignement::/* select('toner_assignements.created_at as creation','toner_assignements.id as assignement_id','quantity_assigned','printer_id','printer_category_id') */
                            select(DB::raw("SUM(toner_assignements.quantity_assigned) as count"),DB::raw("CONCAT_WS('-',YEAR(toner_assignements.created_at),MONTH(toner_assignements.created_at)) as monthyear")
                            ,DB::raw("COUNT(toner_assignements.id) as number"))
                            ->join('printers','toner_assignements.printer_id','=','printers.id')
                            ->where('printer_category_id',2)
                            ->whereBetween('toner_assignements.created_at',[$startDate1 ,$endDate1 ])
                            ->groupBy('monthyear')
                            ->get();
        
        $tonerProductionResult1an= json_encode($tonerProduction1an);

        

        /* dd($tonerProductionResult1an); */

        $tonerAdministration1an = TonerAssignement::/* select('toner_assignements.created_at as creation','toner_assignements.id as assignement_id','quantity_assigned','printer_id','printer_category_id') */
                                select(DB::raw("SUM(toner_assignements.quantity_assigned) as count"),DB::raw("CONCAT_WS('-',YEAR(toner_assignements.created_at),MONTH(toner_assignements.created_at)) as monthyear")
                                ,DB::raw("COUNT(toner_assignements.id) as number"))
                                ->join('printers','toner_assignements.printer_id','=','printers.id')
                                ->where('printer_category_id',1)
                                ->whereBetween('toner_assignements.created_at',[$startDate1 ,$endDate1 ])
                                ->groupBy('monthyear')
                                ->get();
        
        $tonerAdministrationResult1an= json_encode($tonerAdministration1an);

        /* assignements */

        $assignements = TonerAssignement::select('toner_assignements.id as assignement_id','toner_assignements.created_at as creation','toner_id','printer_id','serial_number','ip','quantity_assigned','employee_id','employee_name','matricule','printer_location_id','printer_location_name','printer_name','printer_model_id','printer_model_name','printer_category_id','printer_category_name','color_id','color_name','toner_model_id','toner_model_name')
                            ->join('printers','toner_assignements.printer_id','=','printers.id')
                            ->join('toners','toner_assignements.toner_id','=','toners.id')
                            ->join('employees','toner_assignements.employee_id','=','employees.id')
                            ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
                            ->join('printer_models','printers.printer_model_id','=','printer_models.id')
                            ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
                            ->join('colors','toners.color_id','=','colors.id')
                            ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                            /* ->latest() */
                            ->orderBy('toner_assignements.created_at','desc')
                            ->take(10)
                            
                            ->get();

                            /* dd($assignements); */

        /* $models=TonerModel::all();
        $modelTypes=array();
        array_push($modelTypes,'hello');
        
        $calc = array();
        $mod = array();

        foreach($models as $model){
            array_push($mod, $model->toner_model_name);
        }
        
        $length= count($mod);
        for($i=0; $i<$length; $i++){
            
        } */



        /* dd($models); */

        /* foreach ($models as $model){
            $quantity= Toner::where('toner_model_id','=',$model->id)
                        ->get();

            dd($quantity[0]['quantity_left']);

            array_push($calc,  $quantity->quantity_left);

        
        } */

        /* dd($quantity); */

        /* return [$black,$cyan,$yellow,$magenta,$tonerAdministration1an,$tonerProduction1an]; */
        return view('dashb',compact('tonerAdministrationResult1an','tonerProductionResult1an','yellow','magenta','black','cyan','assignements'));
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
