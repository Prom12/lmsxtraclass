@extends('users.home')


@section('main-content')


<div class="card">
    <div class="card-header">
          <h3 class="card-title">Lessons</h3>
              <div class="card-tools">
                <a type="button" class="btn btn-primary" href="{{route('users.lessons.create')}}">ADD</a>
              </div>
      </div>
            <!-- /.card-header -->
<div class="card-body">
     <table id="example1" class="table table-bordered ">
          <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Course</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
          </thead>
          <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$lesson->title}}</td>
                  <td 
                  @foreach($courses as $course)
                    @if($lesson->course_id == $course->id)
                      >{{$course->title}}</td>
                      @endif
                      @endforeach
                    
                  <td><a href="{{route('users.lessons.edit',$lesson->id)}}"  class=""><i class="fas fa-edit fa-lg"></i></a></td>
                  <td>
                      <form id="delete-form-{{$lesson->id}}" method="post" action="{{route('users.lessons.destroy',$lesson->id)}}">
                        @csrf
                        @method('DELETE')
                      </form>
                      <a href="#" onclick="
                      if(confirm('Are you sure you want to delete'))
                      {
                          event.preventDefault();document.getElementById('delete-form-{{$lesson->id}}').submit();
                      }
                      else{
                        event.preventDefault()
                      }" >
                        <i class="fas fa-trash fa-lg"></i>
                      </a>
                  </td>
                </tr> 
              @endforeach
              </tbody>    
          </table>
</div>
         
@endsection
