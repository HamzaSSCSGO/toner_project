@extends('layouts.admin.master')

@section('title')Ajax
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Ajax DataTables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Data Tables</li>
		<li class="breadcrumb-item active">AJAX</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        
	        <!-- Ajax data source array start-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Ajax data source (Objects)</h5>
	                    <span>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display datatables" id="ajax-data-object">
	                            <thead>
	                                <tr>
										<th>id</th>
										<th>color</th>
										<th>created_at</th>
	                                    {{-- <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th> --}}
	                                </tr>
	                            </thead>
	                            <tfoot>
	                                <tr>
										<th>id</th>
										<th>color</th>
	                                    {{-- <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th> --}}
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Ajax data source array end-->
	        
	    </div>
	</div>

	<script>
		window.colors = '<?php echo $colorsJson ?>';
		window.col = '<?php echo $colors ?>';
	
	</script>
	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/colordata.custom.js') }}"></script> 
	@endpush

@endsection