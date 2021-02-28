<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

 
<!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg" style="background-color:gray;">
        <div class="container">

            <img class="logo" src="@yield('logo')" alt="">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-lg-auto " style="background-color:gray;">
                            <li class="nav-item"><a class="nav-link text-center" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-center"  href="/Ourtutors">Our Tutors</a></li>
                            <li class="nav-item"><a class="nav-link text-center" href="/courses">Subjects</a></li>
                            <li class="nav-item"><a class="nav-link text-center" href="/news">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link text-center"  href="/news">How It works</a></li>
                            <li class="nav-item"><a class="nav-link text-center"  href="/contact">Contact Us</a></li>
                            <li class="nav-item pb-1" style="background-color: green;"><a class="nav-link text-center" href="{{route('login')}}">Login/Register</a></li>
                </ul>
                
            </div>

        </div>
    </nav>