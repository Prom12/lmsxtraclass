@extends('app')

@section('logo',asset('img/extraclasses.png'))

@section('content')
   <!-- Main content -->
    <section class="container ">
          <div class="card m-2">
				<div class="media p-4 h-10 clearfix">
					 <a class="border-3 border-danger" href="#">
					 <img class="img-rounded" src="{{asset('frontpage/img/authors/1.jpg')}}" alt="Media Object">
					 </a>
					 <div class="media-body ml-2">
					 <h4 class="media-heading mb-2">Derrick Gyimah</h4>
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 This is some sample text. This is some sample text.
					 </div>
					</div>
		  </div>             
    </section>
    <!-- /.content -->
@endsection