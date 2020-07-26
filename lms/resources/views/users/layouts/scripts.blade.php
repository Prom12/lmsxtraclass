
<!-- jQuery -->
<script src="{{asset('Admin-l/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Admin-l/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin-l/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin-l/dist/js/adminlte.js')}}"></script>


<script src="{{asset('Admin-l/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin-l/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Admin-l/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Admin-l/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    
  });
  </script>


  <script src="{{asset('frontpage/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontpage/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('frontpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontpage/js/main.js')}}"></script>