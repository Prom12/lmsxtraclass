<!DOCTYPE html>
<html>
<head>
	@include('users.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('users.layouts.header')
		@include('users.layouts.sidebar')
        @include('users.layouts.content')
        @section('main-content')



		@show
		</div><!-- /.container-fluid -->
    	</section>
    	<!-- /.content -->
  			</div>
  		<!-- /.content-wrapper -->
	

		@include('users.layouts.scripts')
		@include('users.layouts.footer')
	</div>
</body>
</html>