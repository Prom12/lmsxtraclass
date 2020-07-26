@extends('app')

@section('logo',asset('img/extraclasses.png'))


@section('content')

<div class="container">
    <div class="mb-3 mt-3">
        <a href="" class="p-4 border-success m-auto">GCSE</a>
        <a href="" class="p-4 border-success border-1 pull-right">A-Levels</a>
    </div>
    <div class="mt-3">
        <p >GSCE</p>

        <div class="flex-row h-100">

        <div class="ml-2 mt-2 mb-2 ">
            <div class="card col-4 pt-5 pb-5" style="background-color: green;">
                <p class="text-center" style="color: white;">Mathematics</p>
            </div>
        </div>

        <div class="ml-2 mt-2 mb-2" >
            <div class="card col-4 pt-5 pb-5" style="background-color: green;">
                <p class="text-center" style="color: white;">English</p>
            </div>
        </div>

        </div>

        <p>A-Levels</p>

        <div class="w-100 h-100 ">
        <div class="ml-2 mt-2 mb-2 ">
            <div class="card col-4 pt-5 pb-5" style="background-color: green;">
                <p class="text-center" style="color: white;">Mathematics</p>
            </div>
        </div>
        <div class="ml-2 mt-2 mb-2 ">
            <div class="card col-4 pt-5 pb-5" style="background-color: green;">
                <p class="text-center" style="color: white;">English</p>
            </div>
        </div>
        </div>

        </div>
    </div>
</div>

@endsection