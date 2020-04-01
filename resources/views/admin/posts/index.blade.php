@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      All Posts
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li><a href="#">Posts</a></li>
      <li class="active">All Posts</li>
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
                    <th>User</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="User has no Photo"></td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                {{-- <td>{{$post->is_active == 1 ? 'Active' : 'Inactive'}}</td > --}}
                                <td>{{$post->created_at->toDayDateTimeString()}}</td >
                                <td style="display:flex;">
                                    <a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-success" style="margin-right: 5px;"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="POST">
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
