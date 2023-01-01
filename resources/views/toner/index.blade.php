@extends('layouts.admin.master')

@section('title')Styling Tables
 {{ $title }}
@endsection

@push('css')
@endpush

<?php 
    use App\Models\Toner;

    $toners = Toner::all();
?>

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
										<tr>
											
                                            <th scope="col">Image</th>
                                            <th scope="col">Quantity</th>
                                            
										</tr>
									</thead>
									<tbody>
                                        @foreach($toners as $toner)
                                        
                                            <tr>
                                                <td><img height="50px" src="{{asset('storage/storage/toner/' .$toner->toner_image)}}"></td>
                                                <td>{{$toner->quantity_left}}</td>
                                                
                                                
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