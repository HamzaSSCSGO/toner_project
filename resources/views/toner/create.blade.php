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
                            <form class="form theme-form" method="POST" action="{{route('create.toner')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
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

