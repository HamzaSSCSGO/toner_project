@extends('layouts.admin.master')

@section('title')Product list
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Toner Assignements</h3>
		@endslot
		<li class="breadcrumb-item">Toner</li>
		<li class="breadcrumb-item">Assignement</li>
		<li class="breadcrumb-item active">List</li>
	@endcomponent
	
	<div class="container-fluid list-products">
	    <div class="row">
	        <!-- Individual column searching (text inputs) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>List Of Assignements</h5>
	                    
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive product-table">
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Printer Name</th>
	                                    <th>Serial Number</th>
	                                    <th>IP</th>
	                                    <th>Printer Mode</th>
	                                    <th>Category</th>
                                        <th>Toner Model</th>
                                        <th>Color</th>
                                        <th>Assigned To</th>
                                        <th>Department</th>
                                        <th>Manager</th>
                                        <th>Quantity Assigned</th>
                                        <th>Date</th>
                                        <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    @foreach($assignements as $assignement)
                                        <tr>
                                            <td>{{$assignement->assignement_id}}</td>
                                            <td>{{$assignement->printer_name}}</td>
                                            <td>{{$assignement->serial_number}}</td>
                                            <td>{{$assignement->ip}}</td>
                                            <td>{{$assignement->printer_model_name}}</td>
                                            <td>{{$assignement->printer_category_name}}</td>
                                            <td>{{$assignement->toner_model_name}}</td>
                                            <td>{{$assignement->color_name}}</td>
                                            <td>{{$assignement->employee_name}}</td>
                                            <td>{{$assignement->department_name}}</td>
                                            <td>{{$assignement->department_manager}}</td>
                                            <td>{{$assignement->quantity_assigned}}</td>
                                            <td>{{$assignement->creation}}</td>
                                            <td>
                                                <a class="btn btn-danger btn-xs"  data-original-title="btn btn-danger btn-xs" href="{{route('delete.assignement',$assignement->assignement_id)}}" >Delete</a>
                                                {{-- <a class="btn btn-primary btn-xs" data-original-title="btn btn-danger btn-xs" href="{{route('update.assignement',$assignement->assignement_id)}}" >Edit</a> --}}
                                            </td>
                                        </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Individual column searching (text inputs) Ends--> 
	    </div>
	</div>

	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
    <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/ecommerce.js')}}"></script>
    <script src="{{asset('assets/js/product-list-custom.js')}}"></script>
	@endpush

@endsection