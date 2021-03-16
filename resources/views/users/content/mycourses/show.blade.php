@extends('users.home')


@section('main-content')
        <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        
        <div class="card-body">

 @foreach($courses as $course)
        <div >
        <div >
            <div class="col-sm-6 col-md-3 col-lg-3 float-lg-left  m-1">
                <div class="img-rounded">
                 <img src="{{asset('frontpage/img/authors/1.jpg')}}"
                 alt="Generic placeholder thumbnail" class="img-rounded w-100">
                 </div>
                    <div class="caption bg-blue">
                        <h3>{{Str::limit($course->title,25)}}</h3>
                        <p style="color:black;">{{ Str::limit($course->description,30)}}</p>
                        <p style="color:black;">Price: {{$course->price}}</p>
                     <p><a href="#" class="btn btn-primary" role="button">Button</a>
                     <a href="#" class="btn btn-default" role="button">Button</a></p>
                     </div>
                    </div>
                 
              </div>
          </div>
  @endforeach
</div>
<br>
  <div class="ml-auto">{!! $courses->render() !!}</div>
</div>

      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection