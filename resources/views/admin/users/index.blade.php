@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1>
      All Users
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
            {{-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> --}}
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Staus</th>
                    <th>Created at</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="User has no Photo"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td >
                                <td>{{$user->created_at->toDayDateTimeString()}}</td >
                                <td style="display:flex;">
                                    <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-success" style="margin-right: 5px;"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('users.destroy', ['user' => $user->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td >
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
