@extends('layouts.admin.master')

@section('title')Styling Tables
 {{ $title }}
@endsection

@push('css')
@endpush

 

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Toneres Table</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Tonere</li>
		<li class="breadcrumb-item active">Index</li>
	@endcomponent
	{{-- {{dd($assignements)}} --}}
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Toners</h5>
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
										{{-- <tr>
											
                                            <th scope="col">Image</th>
                                            <th scope="col">Quantity</th>
                                            
										</tr> --}}
										<tr>
											<th scope="col">id</th>
											<th scope="col">Image</th>
											<th scope="col">Toner Model</th>
											<th scope="col">Color</th>
											<th scope="col">Quantity</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($toners as $toner)

										{{-- {{dd($toner)}} --}}
                                        
                                            <tr>
												<td>{{$toner->toners_id}}</td>
                                                <td><img height="100px" width="auto" src="{{asset('storage/storage/toner/' .$toner->toner_image)}}"></td>
												<td>{{$toner->toner_model_name}}</td>
												<td>{{ $toner->color_name/* $toner['color_id'] */ }}</td>

												@if($toner->quantity_left > 30)
													<td style="color:green"> {{$toner->quantity_left}}</td>
												@elseif($toner->quantity_left < 5)
													<td style="color:red"> {{$toner->quantity_left}}</td>
												@else
													<td> {{$toner->quantity_left}}</td>
												@endif
													
												

												<td><a class="btn btn-danger btn-lg" href="{{route('delete.toner',$toner->toners_id)}}">    <span class="icon-close"></span> Delete</a>
													<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="{{route('edit.toner',$toner->toners_id)}}" > {{-- <span class="icon-edit"> --}}</span>Edit</a></td>
												
												
                                                
                                                
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