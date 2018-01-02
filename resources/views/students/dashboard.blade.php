@extends('layouts.student_layout')

@section('content')
<h1>Dashboard</h1>
  
<div class="row" >
	<div class="col-md-3" >
      <div class="box box-solid box-profile" style="padding-top: 0px"> 
        <center><h3><b>Marks for this week</b> </h3>
        {{-- <h5>Exam No. {{ $dataSend[0]->exam_id }}</h5></center>
        <b><p style="font-size: 15em;margin-top: -50px">{{ $dataSend[0]->marks }}</p></b> --}}
        <h4>Exam No. {{ $myStat[0]->exam_id }}</h4></center>
        <center><b><p style="font-size: 15em;margin-top: -50px ;">{{ $myStat[0]->marks }}</p></b></center>
        <center><h4><b>Class rank {{ $myStat[1] }}</b></h4></center>
      </div>

    </div>

    <div class="col-md-9" style="margin-top:20px">
         <div id="stocks-chart" style="height: 300px"></div>

    </div>
</div>
<div class="row">
      <div class="col-md-6">
      <div class="box box-solid box-profile" style="padding-left: 20px;padding-right: 20px"> 
        <center>
          <h4><b>Weekly Breif</b> </h4>
        </center>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Class Average</b> <a class="pull-right">
            <?php 
              echo round($week[0],2); 
              
            ?>%
          </a>
          </li>
          <li class="list-group-item">
            <b>Maximum marks taken</b> <a class="pull-right">{{ $week[1] }}</a>
          </li>
          <li class="list-group-item">
            <b>Minimum marks taken</b> <a class="pull-right">{{ $week[2] }}</a>
          </li>
        </ul>
      </div>

    </div>
    <div class="col-md-6">
      <div class="box box-solid box-profile" style="padding-left: 20px;padding-right: 20px"> 
        <center>
        <h4><b>My Progress</b> </h4></center>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Average</b> <a class="pull-right">
            <?php 
              echo round($studentData[0],2); 
              
            ?>%</a>
          </li>
          <li class="list-group-item">
            <b>Maximum marks taken</b> <a class="pull-right">{{ $studentData[2] }}</a>
          </li>
          <li class="list-group-item">
            <b>Minimum marks taken</b> <a class="pull-right">{{ $studentData[1] }}</a>
          </li>
        </ul>
      </div>

    </div>
</div>
   

    {!! \Lava::render('LineChart', 'MyStocks', 'stocks-chart') !!}





@endsection



