@extends('layouts.admin.master')

@section('title')Styling Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Styling Tables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Styling Tables</li>
	@endcomponent
	{{-- {{dd($assignements)}} --}}
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Toner Assignements</h5>
						{{-- <span>
							Use background classes<code>.bg-*</code>and <code>table-primary</code>,<code>table-secondary</code>,<code>table-success</code>,<code>table-danger</code> ,<code>table-info</code>,<code>table-warning</code> to make
							custom <code>thead</code> background. You can also use Stack Admin color palette classes for background.
						</span> --}}
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										<tr>
											
                                            <th scope="col">Tracking ID</th>
                                            <th scope="col">Serial Number</th>
                                            <th scope="col">Printer Model</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Toner Model</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Assigned To</th>
                                            <th scope="col">Quantity Assigned</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($assignements as $assignement)
                                        
                                            <tr>
                                                <td>{{$assignement->assignement_id}}</td>
                                                <td>{{$assignement->serial_number}}</td>
                                                <td>{{$assignement->printer_model_name}}</td>
                                                <td>{{$assignement->printer_category_name}}</td>
                                                <td>{{$assignement->toner_model_name}}</td>
                                                <td>{{$assignement->color_name}}</td>
                                                <td>{{$assignement->employee_name}}</td>
                                                <td>{{$assignement->quantity_assigned}}</td>
                                                <td>{{$assignement->creation}}</td>
                                                <td>Actions</td>
                                            </tr>
										@endforeach

										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>	
	
	@push('scripts')
	@endpush

@endsection