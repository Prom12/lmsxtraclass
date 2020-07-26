@extends('users.home')


@section('main-content')

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 p-0">
            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-center">Lessons</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @include('error.message')
              <form role="form" action="{{route('users.lessons.update',$lessons->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body offset-lg-3">

                  <div class="col-lg-7 ">
                      
                       <div class="form-group">
                        <label for="course-title">Title</label>
                        <input type="name" name="title" class="form-control" id="cat-name" placeholder="Enter Title" value="{{$lessons->title}}">
                       </div>

                       <div class="form-group">
                        <label for="category-title">Category</label>
                        <select class="form-control" name="category">
                          @foreach ($categories as $category)
                          <option class="dropdown-item" value="{{$category->id}}" 
                            @if($lessons->categories_id == $category->id)
                                selected
                            @endif
                            >{{$category->title}}</option>
                          @endforeach
                        </select>
                       </div>

                       <div class="form-group">
                        <label for="course-title">Course</label>
                        <select class="form-control" name="course" >
                          @foreach ($courses as $course)
                          <option class="dropdown-item" value="{{$course->id}}"
                            @if($lessons->course_id == $course->id)
                                selected
                            @endif
                            >{{$course->title}}</option>
                          @endforeach
                        </select>
                       </div>


                       <div class="form-group">
                        <label for="course-desc">Description</label>
                        <textarea class="row-4 form-control" name="description">{{$lessons->description}}</textarea>
                       </div>

                       <div class="form-group">
                        <label for="course-title">Google Meet Link</label>
                        <input type="text" class="form-control" id="cat-name" name="link" placeholder="https://" value="{{$lessons->link}}">
                       </div>
                    </div>

                    
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('users.lessons.index')}}" class="btn btn-warning" type="button">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card --> 
@endsection
