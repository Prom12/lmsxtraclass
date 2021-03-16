@extends('app')

@section('logo',asset('img/extraclasses.png'))


@section('content')
<div class="">
	<div class="pb-5 p-2 text-white" style="background-image: url({{asset('frontpage/img/page-bg/1.jpg')}});">
        <h1>
            <b class="text-white">Online tuition
                <br>made simple</b>
        </h1>
            <br>
        <h6 class="mt-2" >
            <a href="{{route('ourTutors')}}" class=" p-2 w-25 text-center" style="background-color: green; color: white;">Find a Tutor</a>
        </h6>
    </div>
</div>
<div class="" style="height:80px; background-color:rgb(236, 236, 236); display:flex;flex-direction:row;justify-content:space-around;align-items:center;overflow:auto;color:white">
    <div class="" style="padding:15px 15px; background-color:rgb(144, 79, 90)"><a style="color:white;" href="{{route('courses')}}">Math</a></div>
    <div class="" style="padding:15px 15px; background-color:rgb(13, 107, 4)">English</div>
    <div class="" style="padding:15px 15px; background-color:rgb(109, 7, 24)">Social</div>
    <div class="" style="padding:15px 15px; background-color:rgb(2, 59, 145)">French</div>
    <div class="" style="padding:15px 15px; background-color:rgb(26, 10, 13)">Economics</div>
    <div class="" style="padding:15px 15px; background-color:rgb(66, 1, 37)">Twi</div>

</div>
<div class="" style="height:400px;display:grid;grid-template-columns:auto auto;">
    <div style="text-align:center;margin-top:50px;">
        <h3 style="margin-bottom:20px;">Affordable Pricing</h3>
        <a href="{{route('pricing')}}" style="padding:10px; background-color:green;color:white;">Compare Our Rates</a>
    </div>
    <div style="background-image: url({{asset('frontpage/img/page-bg/1.jpg')}});">
    </div>
</div>
@endsection
