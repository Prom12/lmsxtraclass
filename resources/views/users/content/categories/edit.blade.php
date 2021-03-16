@extends('users.home')


@section('main-content')

            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-center">Categories</h3>
              </div>
              <!-- /.card-header -->
             
              <!-- form start -->
              <form role="form" class="col-lg-5 offset-lg-4" action="{{route('users.categories.update',$categories->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body ">
                   @include('error.message')

                        <div class="form-group">
                          <label for="user-name-name">Name</label>
                          <input type="name" class="form-control" id="user-name" name="title"placeholder="Enter name" value="{{$categories->title}}">
                        </div>
                    <div class="card-group">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{route('users.categories.index')}}" class="btn btn-warning" type="button">Back</a>
                    </div>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection
