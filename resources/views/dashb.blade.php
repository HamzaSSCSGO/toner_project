@extends('layouts.admin.master')

@section('title')Dashboard TAM
@endsection

{{-- @push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
@endpush --}}
    @section('content')
        @component('components.breadcrumb')
            @slot('breadcrumb_title')
                <h3>General</h3>
            @endslot
            {{-- <li class="breadcrumb-item">Widgets</li> --}}
            <li class="breadcrumb-item active">Dashboard</li>
        @endcomponent

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="{{-- bg-primary --}} b-r-4 card-body" style="background-color: #201e1e; color: white;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Black Toner</span>
                                    <h4 class="mb-0 counter">{{$black}}</h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="{{-- bg-secondary --}} b-r-4 card-body" style="background-color: #954995;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="{{-- shopping-bag --}}database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Magenta Toner</span>
                                    <h4 class="mb-0 counter">{{$magenta}}</h4>
                                    <i class="icon-bg" data-feather="{{-- shopping-bag --}}database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="{{-- bg-primary --}} b-r-4 card-body" style="background-color: #d1d149">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="{{-- message-circle --}}database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Yellow Toner</span>
                                    <h4 class="mb-0 counter">{{$yellow}}</h4>
                                    <i class="icon-bg" data-feather="{{-- message-circle --}}database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="{{-- bg-primary --}} b-r-4 card-body" style="background-color: #39c0c0;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="{{-- user-plus --}}database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Cyan Toner</span>
                                    <h4 class="mb-0 counter">{{$cyan}}</h4>
                                    <i class="icon-bg" data-feather="{{-- user-plus --}}database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card o-hidden">
                            <div class="card-header pb-0">
                                <div class="bar-chart-widget">
                                    <div class="bottom-content card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="chart-widget4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest Toner Assignements</h5>
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
                
                
            </div>

            <script>
                
                window.tonerProd= '<?php echo $tonerProductionResult1an ?>';
                window.tonerAdmin= '<?php echo $tonerAdministrationResult1an ?>';
            
            </script>

            @push('scripts')    
                <script src="{{asset('assets/js/chart/apex-chart/moment.min.js')}}"></script> 
                <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
                <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
                <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
                <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
                <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
                <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
                <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
                <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
                <script src="{{asset('assets/js/chart-widget-js-dash.js')}}"></script>
                <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
            @endpush
    @endsection