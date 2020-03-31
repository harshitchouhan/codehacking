@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Create User
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li><a href="#">Users</a></li>
      <li class="active">Create User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group col-xs-6" style="padding-left:0px;">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name"/>
                  </div>
                <div class="form-group col-xs-6" style="padding-right:0px;">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" />
                </div>
                <div class="form-group col-xs-6" style="padding-left:0px;">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"/>
                </div>
                <div class="form-group col-xs-6" style="padding-right:0px;">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirmPassword" />
                </div>
                <div class="form-group col-xs-6" style="padding-left:0px;">
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                        <option selected disabled>Choose Role</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group col-xs-6" style="padding-right:0px;">
                    <label>Status</label>
                    <select class="form-control" name="is_active">
                        <option value="0" selected>Inactive</option>
                        <option value="1" >Active</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Choose photo</label>
                  <input type="file" id="exampleInputFile" name="photo_id" accept="image/*"/>

                  <p class="help-block">Choose a photo as your profile picture.</p>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create User</button>
              </div>
            </form>

            @include('includes.form_errors')
          </div>
      </div>
    </div>
</section>
@endsection
