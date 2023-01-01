@extends('layouts.admin.master')

@section('title')Employee
 {{ $title }}
@endsection

@push('css')
@endpush

<?php 
use App\Models\Department;

$departments = Department::all();

?>

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>Employee</h3>
		@endslot
		{{-- <li class="breadcrumb-item">Toner</li> --}}
		<li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Create</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD EMPLOYEE</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('create.employee')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Employee Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="name" type="text" placeholder="employee name?" />
                                                </div>
                                                
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                
                                                <label class="col-sm-3 col-form-label">Employee Matricule</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="matricule" type="text" placeholder="matricule?" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Department</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="department" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A DEPARTMENT</option>
                                                        @foreach($departments as $department)
                                                        <option value="{{$department['id']}}" name="department">{{$department['department_name']}}</option>                          
                                                        @endforeach     
                                                    </select>
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

