@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Create Posts
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li><a href="#">Posts</a></li>
      <li class="active">Create Posts</li>
    </ol>
</section>
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group col-xs-6" style="padding-left:0px;">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Name" name="title"/>
                  </div>
                <div class="form-group col-xs-6" style="padding-left:0px;">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option selected disabled>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="body"></textarea>
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">Choose photo</label>
                  <input type="file" id="exampleInputFile" name="photo_id" accept="image/*"/>

                  {{-- <p class="help-block">Choose a photo as your profile picture.</p> --}}
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
