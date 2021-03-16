<!DOCTYPE html>
<html lang="en">
<head>
   @include('frontpage/layouts/head')
</head> 
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    
	@include('frontpage/layouts/header')

    @section('content')

    @show

@include('frontpage/layouts/footer')

</html>