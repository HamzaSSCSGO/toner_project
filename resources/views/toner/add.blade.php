@extends('layouts.admin.master')

@section('title')ADD TONERS
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb') 
		@slot('breadcrumb_title')
			<h3>ADD TONERS</h3>
		@endslot
		<li class="breadcrumb-item">Toners</li>
        <li class="breadcrumb-item active">Add</li>
	@endcomponent

    <?php 
        use App\Models\TonerModel;
        use App\Models\Color;
        use App\Models\Toner;

        $colors=Color::all();
        $tonerModels= TonerModel::all();
        $toners=Toner::select('toners.id as toner_id','toner_model_name','toner_model_id','color_name','color_id','quantity_left')
            ->join('toner_models','toners.toner_model_id','=','toner_models.id')
            ->join('colors','toners.color_id','=','colors.id')
            ->get();

    ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD TONER</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="{{route('add.toner')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            {{-- <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Color</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="color" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A COLOR</option>
                                                        @foreach($colors as $color)
                                                            <option value="{{$color['id']}}" name="color">{{$color['color_name']}}</option>
                                                        
                                                        @endforeach     
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Model</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="tonerModel" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A MODEL</option>
                                                        @foreach($tonerModels as $tonerModel)
                                                            <option value="{{$tonerModel['id']}}" name="tonerModel">{{$tonerModel['toner_model_name']}}</option>
                                                        
                                                        @endforeach    
                                                    </select>
                                                </div>
                                                
                                            </div> --}} 
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="toner" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT TONER MODEL</option>
                                                        @foreach($toners as $toner)
                                                        <option value="{{$toner->toner_id}}" name="{{$toner->toner_model_name}}">{{$toner->toner_model_name}} , {{$toner->color_name}}</option>
                                                        
                                                        @endforeach   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Quantity" name="quantity"/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <input class="btn btn-light" type="reset" value="Cancel" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>


@endsection

