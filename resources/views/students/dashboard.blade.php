@extends('layouts.student_layout')

@section('content')
<h1>Dashboard</h1>

<div class="row" >
	<div class="col-md-3">
		<div class="box-body">           
            <div class="form-group">
                <label>A/L-Year</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">2019</option>
                  <option>2018</option>
                  <option>2017</option>
                </select>              
            </div>
        </div>
        <div class="box-body">           
            <div class="form-group">
                <label>Paper-ID</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Paper 07</option>
                  <option>Paper 06</option>
                  <option>Paper 05</option>
                  <option>Paper 04</option>
                  <option>Paper 03</option>
                  <option>Paper 02</option>
                  <option>Paper 01</option>
                </select>              
            </div>
        </div>
        <div class="box-body">           
            <div class="form-group">
                <label>Marker-ID</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                </select>              
            </div>
        </div>
    </div>

    <div class="col-md-8">
         <div id="stocks-chart"></div>
    </div>
</div>
   

    {!! \Lava::render('LineChart', 'MyStocks', 'stocks-chart') !!}





@endsection



