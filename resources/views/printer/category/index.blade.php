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
                                               
                                            <th scope="col">Printer Category Name</th>
                                            <th scope="col">Actions</th>
                                            

                                           </tr>
									</thead>
									<tbody>
                                        @foreach($printerCategories as $printerCategory)
                                            
                                            <tr>
                                                <td>{{$printerCategory['printer_category_name']}}</td>
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