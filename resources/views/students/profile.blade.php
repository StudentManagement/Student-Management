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
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="box box-primary">
<div class="box-body box-profile">
  <img class="profile-user-img img-responsive img-circle" src="{{ $user_avatar }}" alt="User profile picture">

  <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

  <p class="text-muted text-center">{{ Auth::user()->reg_no }}</p>

  <ul class="list-group list-group-unbordered">
    <li class="list-group-item">
      <b>Address</b> <a class="pull-right">{{ Auth::user()->address }}</a>
    </li>
    <li class="list-group-item">
      <b>Email</b> <a class="pull-right">{{ Auth::user()->email }}</a>
    </li>
    <li class="list-group-item">
      <b>NIC</b> <a class="pull-right">{{ Auth::user()->nic }}</a>
    </li>
    <li class="list-group-item">
      <b>Contact Number</b> <a class="pull-right">{{ Auth::user()->contact_no }}</a>
    </li>
    <li class="list-group-item">
      <b>Institute</b> <a class="pull-right">{{ Auth::user()->institute }}</a>
    </li>
    <li class="list-group-item">
      <b>A/L Batch</b> <a class="pull-right">{{ Auth::user()->al_batch }}</a>
    </li>

  </ul>

  <a href="/home/profile/edit" class="btn btn-primary btn-block"><b>Edit</b></a>
</div>
<!-- /.box-body -->
</div>
</div>
<div class="col-md-3"></div>
</div>
@endsection