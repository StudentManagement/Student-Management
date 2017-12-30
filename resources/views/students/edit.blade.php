@extends('layouts.student_layout')

@section('content')
<?php
$user_avatar = Voyager::image(Auth::user()->avatar);
if ((substr(Auth::user()->avatar, 0, 7) == 'http://') || (substr(Auth::user()->avatar, 0, 8) == 'https://')) {
  $user_avatar = Auth::user()->avatar;
}
?>
<div class="box box-solid box-profile" >
  <div class="box-header with-border">
    <h3 class="box-title">User Details</h3>
  </div>
<form class="form-horizontal" action="/home/profile/edit" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="box-body box-profile">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Name" value="{{ $user->name }}" name="name">
            @if($errors->has('name'))<span class="help-block">{{ $errors->first('name') }}</span>@endif
          </div>
        </div>
        <div class="form-group">
          <label for="avatar" class="col-sm-2 control-label">Avatar</label>
          <div class="col-sm-10">
          <img src="{{ $user_avatar }}" style="max-width: 200px;max-height: 200px">
          {{-- <label for="avatar" class="col-sm-2 control-label">Avatar</label> --}}

            <input type="file" class="form-control" id="avatar" placeholder="Avatar" value="{{ $user->avatar }}" name="avatar">
            @if($errors->has('avatar'))<span class="help-block">{{ $errors->first('avatar') }}</span>@endif
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}" name="email">
            @if($errors->has('email'))<span class="help-block">{{ $errors->first('email') }}</span>@endif
          </div>
        </div>
        <div class="form-group">
          <label for="address" class="col-sm-2 control-label">Address</label>

          <div class="col-sm-10">
            <textarea name="address" class="form-control" name="address">{{ $user->address }}</textarea>
            @if($errors->has('address'))<span class="help-block">{{ $errors->first('address') }}</span>@endif
          </div>
        </div>
        <div class="form-group">
          <label for="nic" class="col-sm-2 control-label">NIC</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nic" placeholder="NIC" value="{{ $user->nic }}" name="nic">
            @if($errors->has('nic'))<span class="help-block">{{ $errors->first('nic') }}</span>@endif
          </div>
        </div>
        <div class="form-group">
          <label for="contact" class="col-sm-2 control-label">Contact No.</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="contact" placeholder="Contact" value="{{ $user->contact_no }}" name="contact">
            @if($errors->has('contact'))<span class="help-block">{{ $errors->first('contact') }}</span>@endif
          </div>
        </div>
        <button type="submit" class="btn btn-success pull-right">Update</button>
    </div>
</form>
</div>

            <div class="box box-solid box-profile" >
                <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <form action="/home/profile/UpdatePassword" id="changepassword" method="post">
                    {{ csrf_field() }}
                    <div class="box-body box-profile">
                        <div class="form-group {{ $errors->has('current_password') ? 'has-error' :'' }}">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="Enter current password" required="true">
                            @if($errors->has('current_password'))<span class="help-block">{{ $errors->first('current_password') }}</span>@endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" required>
                            @if($errors->has('password'))<span class="help-block">{{ $errors->first('password') }}</span>@endif
                        </div>
                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' :'' }}">
                            <label for="password_confirmation">Retype Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Retype new password" required>
                            @if($errors->has('password_confirmation'))<span class="help-block">{{ $errors->first('password_confirmation') }}</span>@endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger pull-right" onClick="validatePassword();">Change My Password</button>
                        </div>
                    </div>
                </form>
            </div>

@endsection