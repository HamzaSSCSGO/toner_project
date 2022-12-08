<?php 
use App\Models\Toner;
use App\Models\Printer;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

/* printer join with model, category and location tables */
$printers= Printer::select('printers.id as printer_id','serial_number','ip','printer_model_name','printer_model_id','printer_category_name','printer_category_id','printer_location_name','printer_location_id')
            ->join('printer_models','printers.printer_model_id','=','printer_models.id')
            ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
            ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
            ->get();
/* dd($printers); */
/* dd(JSON_encode($printers)); */
$prints= JSON_encode($printers);




/* toner join with color and model tables */
$toners=Toner::select('toners.id as toner_id','toner_model_name','toner_model_id','color_name','color_id','quantity_left')
            ->join('toner_models','toners.toner_model_id','=','toner_models.id')
            ->join('colors','toners.color_id','=','colors.id')
            ->get();
/* dd($toners); */

/* dd($printers[2]->serial_number,$printers[2]->printer_id,$printers[2]->printer_model_name,$printers,$toners[2]->toner_id,$toners[2]); */

$employees= Employee::all();

?>

@extends('layouts.admin.master')

@section('title')Create Assignement
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>TONER ASSIGNEMENT</h3>
		@endslot
		<li class="breadcrumb-item">Assignement</li>
        <li class="breadcrumb-item active">Create</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD ASSIGNEMENT </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('create.toner-assignement')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Simple Input</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" />
                                                </div>
                                            </div> --}}

                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Serial Number</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="serialNumber" type="text" placeholder="write the serial number" />
                                                </div>
                                            </div> --}}

                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">IP Address</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="ip" type="text" placeholder="Write the IP address" />
                                                </div>
                                            </div> --}}

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="printer" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A PRINTER WITH THE SERIAL NUMBER</option>
                                                        @foreach($printers as $printer)
                                                        
                                                        <option value="{{$printer->printer_id}}" name="{{$printer->serial_number}}">{{$printer->serial_number}}</option>
                                                        
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="toner" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT TONER MODEL</option>
                                                        @foreach($toners as $toner)
                                                        <option value="{{$toner->toner_id}}" name="{{$toner->toner_model_name}}">{{$toner->toner_model_name}} , {{$toner->color_name}}</option>
                                                        
                                                        @endforeach   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Employee</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="employee" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT AN EMPLOYEE</option>
                                                        @foreach($employees as $employee)
                                                        <option value="{{$employee->id}}" name="{{$employee->employee_name}}">{{$employee->employee_name}}</option>
                                                        
                                                        @endforeach   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Enter the quantity to assign" name="quantity"/>
                                                </div>
                                            </div>

                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Quantity" name="quantity"/>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="password" placeholder="Password input" />
                                                </div>
                                            </div> --}}
                                            
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Telephone</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control m-input digits" type="tel" value="91-(999)-999-999" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">URL</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="url" value="https://getbootstrap.com" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Date and time</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" id="example-datetime-local-input" type="datetime-local" value="2018-01-19T18:45:00" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Date</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="date" value="2018-01-01" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Month</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="month" value="2018-01" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Week</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="week" value="2018-W09" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Time</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="time" value="21:45:00" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label pt-0">Color picker</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-control-color" type="color" value="#24695c" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">
                                                    Maximum Length
                                                </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" placeholder="Content must be in 6 characters" maxlength="6" />
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label pt-0">Static Text</label>
                                                <div class="col-sm-9">
                                                    <div class="form-control-static">
                                                        Hello !... This is static text
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="row">
                                                <label class="col-sm-3 col-form-label">Textarea</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" cols="5" placeholder="Default textarea"></textarea>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <input class="btn btn-light" type="reset" value="Cancel" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>


@endsection

