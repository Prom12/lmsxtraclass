@extends('users.home')


@section('main-content')

            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-center">User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" class="col-lg-5 offset-lg-4" action="{{route('users.users.store')}}" method="POST">
                @csrf
                @include('error.message')
                <div class="card-body ">

                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{old('email')}}">
                        </div>

                        <div class="form-group">
                          <label for="role">Role(s)</label>
                          <div class="form-inline">
                            @foreach($roles as $role)
                          		<input type="checkbox" name="role[]" class="m-2" value="{{$role->id}}">{{$role->name}}
                              @endforeach
                            </div>
                          
                          
                        </div>

                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"value="{{old('password')}}">
                        </div>

                        <div class="form-group">
                          <label for="password_confirmation">Confirm Password</label>
                          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password" value="{{old('password_confirmation')}}">
                        </div>

                        <div class="form-group">
                        
                          <input type="checkbox" class=" mr-2 m-sm-1" id="status" name="status" 

                          @if(old('status') == 1)  
                          checked 
                          @endif

                          value="1">Status</label>
                        
                        </div>

			              <div class="card-group">
			                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
			                  <a href="{{route('users.users.index')}}" class="btn btn-warning" type="button">Back</a>
			              </div>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection
