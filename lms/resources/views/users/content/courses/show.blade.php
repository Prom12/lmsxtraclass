@extends('users.home')


@section('main-content')

<div class="card">
    <div class="card-header">
          <h3 class="card-title">Courses</h3>
              <div class="card-tools">
              <a type="button" class="btn btn-primary " href="{{route('users.courses.create')}}">ADD</a>
              </div>
      </div>
            <!-- /.card-header -->
<div class="card-body">
     <table id="example1" class="table table-bordered ">
          <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Lecturer</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
          </thead>
          <tbody>
            @foreach($courses as $course)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$course->title}}</td>
                  <td>{{$course->lecturer}}</td>
                  <td><a href="{{route('users.courses.edit',$course->id)}}"  class=""><i class="fas fa-edit fa-lg"></i></a></td>
                  <td>
                    <form id="delete-form-{{$course->id}}" method="post" action="{{route('users.courses.destroy',$course->id)}}">
                      @csrf
                      @method('DELETE')
                      
                    </form>
                    <a href="#" onclick="
                      if(confirm('Are you sure you want to delete'))
                        {
                          event.preventDefault();document.getElementById('delete-form-{{$course->id}}').submit();
                        }
                        else{
                          event.preventDefault();
                        }">
                        
                        <i class="fas fa-trash fa-lg"></i>
                      </a>
                    </td>
                </tr>     
                @endforeach
          </table>
</div>
         
@endsection
