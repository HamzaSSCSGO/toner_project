@extends('layouts.admin.master')

@section('title')Chart {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush
@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Chart</h3>
        @endslot
        <li class="breadcrumb-item">Toner</li>
        <li class="breadcrumb-item active">Chart</li>
    @endcomponent

    <div class="container-fluid chart-widget">
        
        <!-- Chart widget top Ends-->
        <!-- Chart widget with bar chart Start-->
        <div class="row">
          <div class="col-xl-12">
            <div class="card o-hidden">
              <div class="card-header pb-0">
                <h5>Toner Expenses</h5>
              </div>
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

        <script>
            window.count = '<?php echo $tonerResult ?>';
            window.tonerProd= '<?php echo $tonerProductionResult1 ?>';
            window.tonerAdmin= '<?php echo $tonerAdministrationResult1 ?>';
        
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
        <script src="{{asset('assets/js/chart-widget-js.js')}}"></script>
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    @endpush
@endsection