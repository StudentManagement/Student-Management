@extends('layouts.student_layout')

@section('content') 
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<h1>Dashboard</h1>
<div class="row" >
	<div class="col-md-3" >
      <div class="box box-solid box-profile" style="padding-top: 0px"> 
        <center><h3><b>Marks for this week</b> </h3>
        {{-- <h5>Exam No. {{ $dataSend[0]->exam_id }}</h5></center>
        <b><p style="font-size: 15em;margin-top: -50px">{{ $dataSend[0]->marks }}</p></b> --}}
        <h4>Exam - {{ $myStat[3]}} ({{  $myStat[0]->exam_id}})</h4></center>
        <center><h4>Marked by: {{ $myStat[2] }}</h4></center>
        <center><b><p style="font-size: 15em;margin-top: -60px;margin-bottom:-45px  ;">{{ $myStat[0]->marks }}</p></b></center>
        <center><h4><b>Provincial rank {{ $myStat[1] }}</b></h4></center>
        <center><h4><b>Institutional rank {{ $myStat[4] }}</b></h4></center>
      </div>

    </div>

    <div class="col-md-9" style="margin-top:20px">
         <div id="stocks-chart" style="height: 300px"></div>

    </div>
</div>
<div class="row">
      <div class="col-md-4">
      <div class="box box-solid box-profile" style="padding-left: 20px;padding-right: 20px"> 
        <center>
          <h4><b>Weekly Breif (Institute)</b> </h4>
        </center>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Class Average</b> <a class="pull-right">
            <?php 
              echo round($weekInst[0],2); 
              
            ?>%
          </a>
          </li>
          <li class="list-group-item">
            <b>Maximum marks taken</b> <a class="pull-right">{{ $weekInst[1] }}</a>
          </li>
          <li class="list-group-item">
            <b>Minimum marks taken</b> <a class="pull-right">{{ $weekInst[2] }}</a>
          </li>
        </ul>
      </div>

    </div>
    <div class="col-md-4">
      <div class="box box-solid box-profile" style="padding-left: 20px;padding-right: 20px"> 
        <center>
          <h4><b>Weekly Breif (All)</b> </h4>
        </center>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Class Average</b> <a class="pull-right">
            <?php 
              echo round($weekProvince[0],2); 
              
            ?>%
          </a>
          </li>
          <li class="list-group-item">
            <b>Maximum marks taken</b> <a class="pull-right">{{ $weekProvince[1] }}</a>
          </li>
          <li class="list-group-item">
            <b>Minimum marks taken</b> <a class="pull-right">{{ $weekProvince[2] }}</a>
          </li>
        </ul>
      </div>

    </div>
    <div class="col-md-4">
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



