@extends('layouts.admin.master')

@section('title')Printers Index
 {{ $title }}
@endsection

@push('css')
@endpush

<?php 
    use App\Models\Printer;

    $printers = Printer::all();
?>

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
											
                                            <th scope="col">Image</th>
                                            <th scope="col">ip</th>
                                            
										</tr>
									</thead>
									<tbody>
                                        @foreach($printers as $printer)

                                        {{-- {{dd($printer->printer_image)}} --}}
                                        
                                            <tr>
                                                <td><img height="50px" src="{{asset('storage/storage/printer/'.$printer->printer_image)}}"> {{-- {{$printer->printer_image}} --}}</td>
                                                <td>{{$printer->ip}}</td>
                                                
                                                
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