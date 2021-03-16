@extends('users.home')


@section('main-content')

            <!-- general form elements -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title text-center">User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" class="col-lg-5 offset-lg-4" action="{{route('users.users.update',$users->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('error.message')
                <div class="card-body ">

                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$users->name}}">
                        </div>

                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{$users->email}}">
                        </div>


                        <div class="form-group">
                          <label for="role">Role(s)</label>
                          <div class=""  >
                            @foreach($roles as $role)
                              <input type="checkbox" class="mt-2 mb-2 mr-2" name="role[]"  value="{{$role->id}}"
                             @foreach($users->roles as$user_role)
                             @if($user_role->id == $role->id)
                                  checked
                                  @endif
                                  @endforeach
                              >{{$role->name}}
                              @endforeach
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="status">
                          
                          <input type="checkbox" class=" mr-2" id="status" name="status" 

                          @if($users->status == 1 || old('status') == 1)  
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
