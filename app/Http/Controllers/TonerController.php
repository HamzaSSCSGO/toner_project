<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Toner;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $path = public_path('storage\storage\toner');
        dd($path); */
        $toners=DB::table('toners')
                ->select('toners.id as toners_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id','toner_image')
                ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                ->join('colors','toners.color_id','=','colors.id')
                ->get();

        /* $toners=DB::table('toners')
                ->select('toners.id as toners_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id','toner_image')
                ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                ->join('colors','toners.color_id','=','colors.id')
                ->where('quantity_left','<','5')
                ->get(); */
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

        /* $exist = ["this data exists"];
        $nexist = ["this data does not exist"];

        $exToner = Toner::where('toner_model_id','=',$request->tonerModel)
                        ->where('color_id','=',$request->color)
                        ->first();
        if($exToner !== null)
        {
            
            return view('toner.create',$exist);
        }else{
            return view('toner.create',$nexist);
                
            
        } */
        

        $input = $request->all();
        $destination_path = 'public/storage/toner';
        $image= $request->file('image');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('image')->storeAs($destination_path,$image_name);

        $toner = new Toner();
        $toner->color_id = $request->color;
        $toner->toner_model_id = $request->tonerModel;
        $toner->quantity_left=$request->quantity;
        $toner->toner_image = $image_name;
        $toner->save(); 

        /* $userName = Auth::user()->name;
        $details=[
            'title' => 'Mail from Toner Asset Manager App',
            'description'=> $userName . ' just added a toner ' ,
            'username' => $userName,
            
        ]; 

        Mail::to("jits.maron@gmail.com")->send(new TestMail($details)); */
        
        return view('toner.create');
    }

    public function add(Request $request){

        /* dd($request); */
        $toner=Toner::where('id',$request->toner)->get();
        /* dd($toner[0]->quantity); */
        /* dd($this->$toner); */

        $toner[0]->quantity_left = $toner[0]->quantity_left + $request->quantity;
        $toner[0]->save();
        /* dd($request); */
/*         $toner=Toner::where([['toner_model_id',$request->tonerModel],['color_id',$request->color]])->get(); */
        /* dd($toner[0]->quantity); */
        /* $toner[0]->quantity_left = $toner[0]->quantity_left + $request->quantity;
        $toner[0]->save(); */
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
        $toner = Toner::find($id);
        /* dd($toner); */
        return view('toner.update',compact('toner')); 
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
        /* dd($request); */
        $toner = Toner::find($id);
        $toner->quantity_left=$request->quantity;
        /* dd($toner); */
        if($request->hasFile('image')){
            $destination_path = 'public/storage/toner';
            $image= $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $toner->toner_image = $image_name;

        }

        $toner->save();
        return redirect('toner-index');
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
