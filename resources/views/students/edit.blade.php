@extends('layouts.student_layout')

@section('content')
<form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="avatar" placeholder="Avatar" value="{{ $user->avatar }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea name="address" class="form-control">{{ $user->address }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nic" class="col-sm-2 control-label">NIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nic" placeholder="NIC" value="{{ $user->nic }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="contact" class="col-sm-2 control-label">Contact No.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="contact" placeholder="Contact" value="{{ $user->contact_no }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" value="{{ $user->password }}">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
</form>

@endsection