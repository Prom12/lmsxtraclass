@extends('users.home')


@section('main-content')

<div class="card">
    <div class="card-header">
          <h3 class="card-title">Categories</h3>
              <div class="card-tools">
              <a type="button" class="btn btn-primary " href="{{route('users.categories.create')}}">ADD</a>
              </div>
      </div>
            <!-- /.card-header -->
<div class="card-body">
     <table id="example1" class="table table-bordered ">
          <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$category->title}}</td>
                  <td><a href="{{route('users.categories.edit',$category->id)}}"  class=""><i class="fas fa-edit fa-lg"></i></a></td>
                  <td>
                    <form id="delete-form-{{$category->id}}" method="post" action="{{route('users.categories.destroy',$category->id)}}">
                      @csrf
                      @method('DELETE')
                      
                    </form>
                    <a href="#" onclick="
                    if(confirm('Are you sure you want to delete'))
                      {
                        event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit();
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
         
@endsection
