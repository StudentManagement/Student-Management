@extends('voyager::master')

@section('content')
    {{--<div class="container-fluid">--}}
    {{--<h2>Summary</h2>--}}
    {{--<div class="box-body">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="form-group">--}}
                    {{--<label>Institute</label>--}}
                    {{--<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">--}}
                            {{--<option selected="selected">Overall</option>--}}
                            {{--<option>{{$instituteName[0]->name}}</option>--}}
                            {{--<option>{{$instituteName2[0]->name}}</option>--}}
                            {{--<option>{{$instituteName3[0]->name}}</option>--}}

                        {{--</select>--}}
                    {{--</form>>--}}
                {{--</div>--}}
                {{--<!-- /.form-group -->--}}

                {{--<!-- /.form-group -->--}}
            {{--</div>--}}

            {{--<div class="col-md-6">--}}
                {{--<div class="form-group">--}}
                    {{--<label>Search by Student</label>--}}
                    {{--<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Enter Registration No." style="width: 100%;" tabindex="-1" aria-hidden="true">--}}

                    {{--</select>--}}
                {{--</div>--}}
                {{--<!-- /.form-group -->--}}

                {{--<!-- /.form-group -->--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="form-group">--}}
                    {{--<label>Search by Exam Number</label>--}}
                    {{--<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Enter Exam No." style="width: 100%;" tabindex="-1" aria-hidden="true">--}}

                    {{--</select>--}}
                {{--</div>--}}
                {{--<a href="/admin/summary123/test"><button> Matara</button></a>--}}
                {{--<button href="/admin/summary/2">Galle</button>--}}
                {{--<button href="/admin/summary/3">Hambantota</button>--}}
                {{--<!-- /.form-group -->--}}

                {{--<!-- /.form-group -->--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
        {{--</div>--}}
        {{--<!-- /.row -->--}}
    {{--</div>--}}
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
                            echo round($avgMarks,2);

                            ?>%
                        </a>
                    </li>
                    <li class="list-group-item">
                        <b>Maximum marks taken</b> <a class="pull-right">{{ $thisWeekMax }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Minimum marks taken</b> <a class="pull-right">{{ $thisWeekMin }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Total participants to the exam</b> <a class="pull-right">{{ $totalPapers }}</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-md-6">
            <center>
                <h4><b>Grade Distribution</b> </h4>
            </center>
            <div id="chart-div" >
                <?= Lava::render('PieChart', 'IMDB', 'chart-div') ?>
            </div>
        </div>

    </div>





    <div class="col-md-6">
        <div class="box box-solid box-profile" style="padding-left: 20px;padding-right: 20px">
            <center>
                <h4><b>Top 20 Results</b> </h4>
            </center>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <table class="table table-hover">
                         <thead>
                           <tr>
                             <th scope="col">Register Number</th>
                             <th scope="col">Name</th>
                             <th scope="col">Marks</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datum)
                            <tr>
                            <td>{{$datum->reg_no}}</td>
                            <td>{{$datum->name}}</td>
                            <td>{{$datum->marks}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </li>
            </ul>
        </div>

    </div>


</div>
@endsection



