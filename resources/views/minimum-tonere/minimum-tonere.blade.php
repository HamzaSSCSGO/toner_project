<?php 
use App\Models\CriticalValue;
$checkValue = CriticalValue::all()->first();
if($checkValue===null){
    $check=null;
}else{
    $check=1;
    $newCriticalValue = CriticalValue::all()->first()->critical_value;
}

/* dd($newCriticalValue = CriticalValue::all()->first()); */
?>
@extends('layouts.admin.master')

@section('title')Minimum Toner
 {{-- {{ $title }} --}}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Settings</h3>
		@endslot
		<li class="breadcrumb-item">Minimum Toner</li>
        {{-- <li class="breadcrumb-item active">Create</li> --}}
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>CRITICAL TONER VALUE </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('minimum-update')}}" enctype="multipart/form-data" >
                                @csrf 
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            @if($check === null)
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Minimum Value</label>
                                                    
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" type="number" placeholder="Minimum Quantity" name="minimum"/>
                                                    </div>
                                                </div>
                                            
                                                
                                            @else
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Minimum Value</label>
                                                    
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" type="number" placeholder="{{$newCriticalValue}}" name="minimum"/>
                                                </div>
                                            </div>
                                                
                                            @endif

                                            

                                            
                                            
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

