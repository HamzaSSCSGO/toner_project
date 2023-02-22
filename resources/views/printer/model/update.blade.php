
@extends('layouts.admin.master')

@section('title')Update Printer Model 
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Update Printer Model</h3>
		@endslot
		<li class="breadcrumb-item">Printer Model</li>
        <li class="breadcrumb-item active">Update</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>UPDATE PRINTER MODEL </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('update.printer-model',$printerModel->id)}}" enctype="multipart/form-data" >
                                @csrf 
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Model</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="text" value={{$printerModel->printer_model_name}} placeholder="" name="name"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="card-footer text-end">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button class="btn btn-primary" type="submit">Submit Update</button>
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

