@extends('layouts.student_layout')

@section('content')
<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6">
<h3>Profile</h3>

<?php
$user_avatar = Voyager::image(Auth::user()->avatar);
if ((substr(Auth::user()->avatar, 0, 7) == 'http://') || (substr(Auth::user()->avatar, 0, 8) == 'https://')) {
$user_avatar = Auth::user()->avatar;
}
?>

<div class="box box-primary">
<div class="box-body box-profile">
  <img class="profile-user-img img-responsive img-circle" src="{{ $user_avatar }}" alt="User profile picture">

  <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

  <p class="text-muted text-center">Reg No</p>

  <ul class="list-group list-group-unbordered">
    <li class="list-group-item">
      <b>Address</b> <a class="pull-right">1,322</a>
    </li>
    <li class="list-group-item">
      <b>NIC</b> <a class="pull-right">543</a>
    </li>
    <li class="list-group-item">
      <b>Contact Number</b> <a class="pull-right">13,287</a>
    </li>
    <li class="list-group-item">
      <b>Institute</b> <a class="pull-right">13,287</a>
    </li>
    <li class="list-group-item">
      <b>A/L Batch</b> <a class="pull-right">13,287</a>
    </li>

  </ul>

  <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
</div>
<!-- /.box-body -->
</div>
</div>
<div class="col-md-3"></div>
</div>
@endsection