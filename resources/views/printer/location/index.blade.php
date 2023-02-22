@extends('layouts.admin.master')

@section('title')Printers Index
 {{ $title }}
@endsection

@push('css')
@endpush



@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Printers Locations Index</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Printers Locations</li>
		<li class="breadcrumb-item active">Index</li>
	@endcomponent
	{{-- {{dd($assignements)}} --}}
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Printers Locations</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										
										<tr>
                                               
                                            
                                            <th scope="col">Location Name</th>
                                            <th scope="col">Actions</th>
                                            

                                           </tr>
									</thead>
									<tbody>
                                        @foreach($locations as $location)
                                            
                                            <tr>
                                                <td>{{$location['printer_location_name']}}</td>
                                                <td><a class="btn btn-danger btn-lg" href="{{route('delete.printer-location',$location['id'])}}">    <span class="icon-close"></span> Delete</a>
													<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="{{route('edit.printer-location',$location['id'])}}" > {{-- <span class="icon-edit"> --}}</span>Edit</a></td>
                                                
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