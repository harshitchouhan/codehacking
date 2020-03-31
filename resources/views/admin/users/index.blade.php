@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li><a href="#">Users</a></li>
      <li class="active">All User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Staus</th>
                    <th>Created at</th>
                  </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td >
                                <td>{{$user->created_at->toDayDateTimeString()}}</td >
                            </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
