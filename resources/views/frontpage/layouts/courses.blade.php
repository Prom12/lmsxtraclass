@extends('app')

@section('logo', asset('img/extraclasses.png'))


@section('content')

    @foreach ($categories as $category)
    <div class="col-lg-11">
        <h3 class="text-center mt-2">{{$category->title}}</h3>
        <div class="rowc col-lg-12">
            @foreach ($courses as $course)
            @if ($category->id == $course->categories_id)
                <div class="columnc mt-3 mb-3">
                    <div class="cardc">{{$course->title}}</div>
                </div>
            @endif

            @endforeach
        </div>
    </div>
    @endforeach
@endsection
