<?php 
use App\Models\PrinterModel;
use App\Models\PrinterCategory;
use App\Models\PrinterLocation;

$printerModels=PrinterModel::all();
$printerCategories= PrinterCategory::all();
$printerLocations= PrinterLocation::all();

?>

@extends('layouts.admin.master')

@section('title')Printer
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Create Printer</h3>
		@endslot
		<li class="breadcrumb-item">Printer</li>
        <li class="breadcrumb-item active">Create</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD PRINTER </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('create.printer')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="printer_name" type="text" placeholder="write the printer's name" />
                                                </div>
                                            </div>
                                            

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Serial Number</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="serialNumber" type="text" placeholder="write the serial number" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">IP Address</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="ip" type="text" placeholder="Write the IP address" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Model</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="printerModel" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A MODEL</option>
                                                            @foreach($printerModels as $printerModel)
                                                        <option value="{{$printerModel['id']}}" name="{{$printerModel['printer_model_name']}}">{{$printerModel['printer_model_name']}}</option>
                                                        
                                                        @endforeach 
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Category</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="printerCategory" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A CATEGORY</option>
                                                        @foreach($printerCategories as $printerCategory)
                                                        <option value="{{$printerCategory['id']}}" name="{{$printerCategory['printer_category_name']}}">{{$printerCategory['printer_category_name']}}</option>
                                                        
                                                        @endforeach    
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Location</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="printerLocation" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A LOCATION</option>
                                                        @foreach($printerLocations as $printerLocation)
                                                        <option value="{{$printerLocation['id']}}" name="{{$printerLocation['printer_location_name']}}">{{$printerLocation['printer_location_name']}}</option>
                                                        
                                                        @endforeach   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Upload Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="image" />
                                                </div>
                                            </div>

                                            
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

