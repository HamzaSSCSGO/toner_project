@extends('layouts.admin.master')

@section('title')Styling Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Toner Assignements</h3>
		@endslot
		<li class="breadcrumb-item">Toner</li>
		<li class="breadcrumb-item">Assignements</li>
		<li class="breadcrumb-item active">Index</li>
	@endcomponent
	{{-- {{dd($assignements)}} --}}
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					
					<div class="card-body">
						<div class="table-responsive">
							<table class="display datatables" id="ajax-data-object">
								<thead>
									<tr>
										<th scope="col">Tracking ID</th>
										<th scope="col">Printer Name</th>
										<th scope="col">Serial Number</th>
										<th scope="col">IP</th>
										<th scope="col">Printer Model</th>
										<th scope="col">Category</th>
										<th scope="col">Toner Model</th>
										<th scope="col">Color</th>
										<th scope="col">Assigned To</th>
										<th scope="col">Department</th>
										<th scope="col">Manager</th>
										<th scope="col">Quantity Assigned</th>
										<th scope="col">Date</th>
										{{-- <th scope="col">Actions</th> --}}
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">Tracking ID</th>
										<th scope="col">Printer Name</th>
										<th scope="col">Serial Number</th>
										<th scope="col">IP</th>
										<th scope="col">Printer Model</th>
										<th scope="col">Category</th>
										<th scope="col">Toner Model</th>
										<th scope="col">Color</th>
										<th scope="col">Assigned To</th>
										<th scope="col">Department</th>
										<th scope="col">Manager</th>
										<th scope="col">Quantity Assigned</th>
										<th scope="col">Date</th>
										{{-- <th scope="col">Actions</th> --}}
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>	

	<script>
		window.assignements = '<?php echo $assignementsj ?>';
		
	
	</script>
	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/assignements.custom.js') }}"></script>  
	@endpush

@endsection