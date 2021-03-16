
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('Admin-l/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">XtraClass</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin-l/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills flex-column"  role="menu" >
  
              <li class="nav-item m-2">
                <a href="" class="nav-link active">
                  <i class="fas fa-home mr-2"></i>
                  Dashboard 
                </a>
              </li>


              <li class="nav-item m-2">
                <a href="{{route('users.users.index')}}" class="nav-link ">
                  <i class="fas fa-users mr-2"></i>
                  Users
                </a>
              </li>

              
              <li class="nav-item m-2">
                <a href="{{route('users.my_courses.index')}}" class="nav-link ">
                  <i class="fas fa-plus-circle mr-2"></i>
                  My Courses 
                </a>
              </li>


              <li class="nav-item m-2">
                <a href="{{route('users.categories.index')}}" class="nav-link ">
                  <i class="fas fa-list mr-2"></i>
                  Levels 
                </a>
              </li>

              <li class="nav-item m-2">
                <a href="{{route('users.courses.index')}}" class="nav-link ">
                  <i class="fas fa-plus-circle mr-2"></i>
                  Subjects 
                </a>
              </li>

              <li class="nav-item m-2">
                <a href="{{route('users.lessons.index')}}" class="nav-link ">
                  <i class="fas fa-plus-circle mr-2"></i>
                  Lessons 
                </a>
              </li>

              <li class="nav-item m-2">
                <a href="{{route('users.news.index')}}" class="nav-link ">
                  <i class="fas fa-newspaper mr-2"></i>
                  News
                </a>
              </li>
          

          <li class="nav-item m-2">
                <a href="" class="nav-link"  data-toggle="modal"data-target="#sign-out">
                  <i class="fas fa-sign-out-alt mr-2"></i>
                  Logout
                </a>
              </li>

              <li class="nav-item m-2">
                <a href="{{route('users.settings.index')}}" class="nav-link ">
                  <i class="fas fa-wrench mr-2"></i>
                  Settings
                </a>
              </li>
          
          <li class="nav-item m-2">
                <a href="" class="nav-link ">
                  <i class="fas fa-file mr-2"></i>
                  Documentation
                </a>
              </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!--Modal-->
<div class="modal fade" id="sign-out">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Do you want to exit?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Press LogOut to Leave
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log-out</button>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
         </form></button>
      </div>
    </div>
    
  </div>
  
</div>
<!--End of Modal-->
