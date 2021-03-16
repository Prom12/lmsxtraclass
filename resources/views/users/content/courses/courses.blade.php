@extends('users.home')


@section('main-content')

            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-center">Courses</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('users.courses.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  @include('error/message')
                  <div class="col-lg-7  float-lg-left">

                        <div class="form-group">
                          <label for="course-title">Title</label>
                          <input type="name" class="form-control" name="title" id="cat-name" placeholder="Enter Title" >
                         </div>

                        <div class="form-group">
                        	<label >Category</label>	
              							<select class="form-control" name="category">
                              @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->title}}</option>
                              @endforeach
                            </select>
              				  </div>


                        <div class="form-group">
                          <label for="course-price">Price</label>
                          <input type="number" class="form-control" id="course-price" name="price" placeholder="Enter Price">
                         </div>
             
                         <div class="form-group">
                          <label for="course-desc">Description</label>
                          <textarea class="row-3 form-control" name="description"></textarea>
                         </div>
                  </div>

                  <div class="float-left ml-lg-4">

                        <div class="form-group">
                          <label for="ChooseFile">Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="ChooseFile" name="image">
                              <label class="custom-file-label" for="ChooseFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('users.courses.index')}}" class="btn btn-warning" type="button">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection
