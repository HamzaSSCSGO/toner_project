

@extends('layouts.admin.master')

@section('title')UPDATE Printer
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Update Department</h3>
		@endslot
		<li class="breadcrumb-item">Department</li>
        <li class="breadcrumb-item active">Update</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>UPDATE Department </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('update.department',$department->id)}}" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Department Name</label>
                                                <div class="col-sm-9">
                                                    <input value={{$department->department_name}} class="form-control" name="department_name" type="text" placeholder="write the printer's name" />
                                                </div>
                                            </div>
                                            

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Department Manager</label>
                                                <div class="col-sm-9">
                                                    <input value={{$department->department_manager}} class="form-control" name="department_manager" type="text" placeholder="write the serial number" />
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

