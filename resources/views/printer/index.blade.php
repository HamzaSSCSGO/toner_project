@extends('layouts.admin.master')

@section('title')Printers Index
 {{ $title }}
@endsection

@push('css')
@endpush



@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Printers Index</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Printers</li>
		<li class="breadcrumb-item active">Index</li>
	@endcomponent
	{{-- {{dd($assignements)}} --}}
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Printers</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										
										<tr>
                                               
                                            <th scope="col">id</th>
											<th scope="col">Name</th>
											<th scope="col">Image</th>
                                            <th scope="col">Printer Serial Number</th>
                                            <th scope="col">IP Address</th>
                                            <th scope="col">Printer Model</th>
                                            <th scope="col">Printer Category</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Actions</th>

                                           </tr>
									</thead>
									<tbody>
                                        @foreach($printers as $printer)

                                        {{-- {{dd($printer->printer_image)}} --}}
                                        
                                            <tr>
												<td>{{$printer['printer_id']}}</td>
												<td>{{$printer['printer_name']}}</td>
                                                <td><img height="50px" src="{{asset('storage/storage/printer/'.$printer->printer_image)}}"> {{-- {{$printer->printer_image}} --}}</td>
                                                <td>{{$printer['serial_number']}}</td>
												<td>{{$printer['ip']}}</td>
                                               <td>{{$printer['printer_model_name']}}</td>
                                               <td>{{$printer['printer_category_name']}}</td>
                                               <td>{{$printer['printer_location_name']}}</td>
											   <td><a class="btn btn-danger btn-lg" href="{{route('delete.printer',$printer['printer_id'])}}">    <span class="icon-close"></span> Delete</a> 
												<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="{{route('edit.printer',$printer->printer_id)}}" > {{-- <span class="icon-edit"> --}}</span>Edit</a></td>
                                                
                                                
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