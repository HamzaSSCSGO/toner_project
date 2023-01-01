<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TonerAssignement;

class TestController extends Controller
{

    public function test(Request $request)
    {
        /* dd($request); */

        /* $start = Carbon::createFromIsoFormat('!DD MMMM, YYYY', $request->start_date);
        $startDate= $start->isoFormat('Y-M-D'); */

        /* dd($startDate); */

        /* $end = Carbon::createFromIsoFormat('!DD MMMM, YYYY', $request->end_date);
        $endDate= $end->isoFormat('Y-M-D'); */

        /* $date = Carbon::createFromIsoFormat('!DD MMMM, YYYY', $request->start_date);
        dd($date->isoFormat('Y-M-D')); */

        /* $startDate = Carbon::parse($request->start_date)->format('Y-m-d');
        $endDate = Carbon::parse($request->end_date)->format('Y-m-d'); */

        /* $startDate = $request->start_date . ' 00:00:00';
        $endDate = $endDate . ' 23:59:59'; */

        /* NEW START DATE */
        $startDate = $request->start_date . ' 00:00:00';
        $endDate = $request->end_date . ' 23:59:59';


        /* dd($startDate,$endDate); */
        /* dd($startDate,$endDate); */
        /* $date1=date('2022-09-25 23:59:59'); */
        /* dd($date1); */
        /* $date2= date('2021-11-01 00:00:00'); */

        /* $tonerBetween = TonerAssignement::whereBetween('created_at',[$date2,$date1])->get();
        dd($tonerBetween); */

        /* $data= TonerAssignement::select(DB::raw("SUM(toner_assignements.employee_id) as count"),DB::raw("CONCAT_WS('-',YEAR(created_at),MONTH(created_at)) as monthyear"))
               ->groupby('monthyear')
               ->get();
        dd($data); */

        $toner= TonerAssignement::select(DB::raw("SUM(toner_assignements.employee_id) as count"),DB::raw("CONCAT_WS('-',YEAR(created_at),MONTH(created_at)) as monthyear"))
                ->whereBetween('created_at',[$startDate ,$endDate ])
                ->groupBy('monthyear')
                ->get();
        /* dd($toner); */
        /* $toner = TonerAssignement::select(DB::raw("SUM(toner_assignements.employee_id) as count"),DB::raw('MONTH(created_at) as month')) */
                    /* ->whereYear('created_at', date('Y')) */
                    /* ->whereBetween('created_at',[$date2,$date1])
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->get(); */
        $tonerResult=json_encode($toner);
        /* dd($date1,$date2,$tonerResult); */
        /* dd($tonerResult); */

        $tonerProduction = TonerAssignement::select(DB::raw("SUM(toner_assignements.employee_id) as count"),DB::raw("CONCAT_WS('-',YEAR(created_at),MONTH(created_at)) as monthyear"))
                            ->where('printer_id',0)
                            ->whereBetween('created_at',[$startDate ,$endDate ])
                            ->groupBy('monthyear')
                            ->get();
        /* dd($tonerProduction); */ 

        $tonerAdministration = TonerAssignement::select(DB::raw("SUM(toner_assignements.employee_id) as count"),DB::raw("CONCAT_WS('-',YEAR(created_at),MONTH(created_at)) as monthyear"))
                                ->where('printer_id',1)
                                ->whereBetween('created_at',[$startDate ,$endDate ])
                                ->groupBy('monthyear')
                                ->get();

        $tonerProductionResult=json_encode($tonerProduction);

        $tonerAdministrationResult=json_encode($tonerAdministration);

        $tonerAdministration1 = TonerAssignement::/* select('toner_assignements.created_at as creation','toner_assignements.id as assignement_id','quantity_assigned','printer_id','printer_category_id') */
                                select(DB::raw("SUM(toner_assignements.quantity_assigned) as count"),DB::raw("CONCAT_WS('-',YEAR(toner_assignements.created_at),MONTH(toner_assignements.created_at)) as monthyear")
                                ,DB::raw("COUNT(toner_assignements.id) as number"))
                                ->join('printers','toner_assignements.printer_id','=','printers.id')
                                ->where('printer_category_id',1)
                                ->whereBetween('toner_assignements.created_at',[$startDate ,$endDate ])
                                ->groupBy('monthyear')
                                ->get();
        
        $tonerAdministrationResult1= json_encode($tonerAdministration1);

        $tonerProduction1 = TonerAssignement::/* select('toner_assignements.created_at as creation','toner_assignements.id as assignement_id','quantity_assigned','printer_id','printer_category_id') */
                            select(DB::raw("SUM(toner_assignements.quantity_assigned) as count"),DB::raw("CONCAT_WS('-',YEAR(toner_assignements.created_at),MONTH(toner_assignements.created_at)) as monthyear")
                            ,DB::raw("COUNT(toner_assignements.id) as number"))
                            ->join('printers','toner_assignements.printer_id','=','printers.id')
                            ->where('printer_category_id',2)
                            ->whereBetween('toner_assignements.created_at',[$startDate ,$endDate ])
                            ->groupBy('monthyear')
                            ->get();
        
        $tonerProductionResult1= json_encode($tonerProduction1);

        /* dd($tonerProductionResult1); */


        /* toner moins 1 an */

        $startDate1= Carbon::now()->subYear();
        $endDate1 = Carbon::now();
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

        /* dd($tonerProductionResult1,$tonerAdministrationResult1); */

        /* dd($tonerProductionResult, $tonerAdministrationResult); */
        
        return view('assignement.assignement-chart',compact('tonerResult','tonerAdministrationResult1','tonerProductionResult','tonerProductionResult1','tonerProductionResult1an'));
    }
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
