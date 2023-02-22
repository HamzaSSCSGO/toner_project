

@extends('layouts.admin.master')

@section('title')UPDATE Employee
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Update Employee</h3>
		@endslot
		<li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Update</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>UPDATE Employee </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('update.employee',$employee->id)}}" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Employee Name</label>
                                                <div class="col-sm-9">
                                                    <input value={{$employee->employee_name}} class="form-control" name="employee_name" type="text" placeholder="write the printer's name" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Employee Matricule</label>
                                                <div class="col-sm-9">
                                                    <input value={{$employee->matricule}} class="form-control" name="matricule" type="text" placeholder="write the printer's name" />
                                                </div>
                                            </div>
                                            

                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Department Manager</label>
                                                <div class="col-sm-9">
                                                    <input value={{$department->department_manager}} class="form-control" name="department_manager" type="text" placeholder="write the serial number" />
                                                </div>
                                            </div> --}}

                                            

                                            
                                            
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

