<?php 
use App\Models\TonerModel;
use App\Models\Color;

$colors=Color::all();
$tonerModels= TonerModel::all();

/* dd($colors, $tonerModels); */

?>
@extends('layouts.admin.master')

@section('title')Toner
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Create Toner</h3>
		@endslot
		<li class="breadcrumb-item">Toner</li>
        <li class="breadcrumb-item active">Create</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD TONER </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('create.toner')}}">
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
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Model</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="tonerModel" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A MODEL</option>
                                                        @foreach($tonerModels as $tonerModel)
                                                        <option value="{{$tonerModel['id']}}" name="tonerModel">{{$tonerModel['toner_model_name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Color</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="color" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A COLOR</option>
                                                        @foreach($colors as $color)
                                                        <option value="{{$color['id']}}" name="color">{{$color['color_name']}}</option>                          
                                                        @endforeach     
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Quantity" name="quantity"/>
                                                </div>
                                            </div>
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
