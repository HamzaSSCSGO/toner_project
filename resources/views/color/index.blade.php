@extends('layouts.admin.master')

@section('title')Colors
 
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Colors</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Colors</li>
		<li class="breadcrumb-item active">Index</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        
	        <!-- Ajax data source array start-->
	        <div class="col-sm-12">
	            <div class="card">
	                
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display datatables" id="ajax-data-object">
	                            <thead>
	                                <tr>
										<th>id</th>
										<th>color</th>
										
	                                </tr>
	                            </thead>
	                            <tfoot>
	                                <tr>
										<th>id</th>
										<th>color</th>
	                                    
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