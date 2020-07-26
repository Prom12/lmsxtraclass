@extends('users.home')


@section('main-content')
 <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <a type="button" class="btn btn-primary float-right" href="{{route('users.users.create')}}">ADD</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                   

                    
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              @include('error.message')
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Role(s)</th>
                      <th>State</th>
                      <th>Created</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
                      <td>{{$user->status? 'Active':"Inactive"}}</td>
                      <td>{{$user->created_at}}</td>
                      <td><a href="{{route('users.users.edit',$user->id)}}"  class=""><i class="fas fa-edit fa-lg"></i></a></td>
                      <td>
                        <form id="delete-form-{{$user->id}}" action="{{route('users.users.destroy',$user->id)}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                      </form>
                        <a href="#"  onclick="
                        if(confirm('Are you sure you want to delete'))
                          {
                            event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();
                          }
                          else{
                            event.preventDefault();
                          }">
                          <i class="fas fa-trash fa-lg"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
         
@endsection
