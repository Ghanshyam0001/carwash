<!-- Top Bar Start -->
<header>
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="">
                            <h1>Clean <span>Wash</span></h1>
                            <!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/home/index" class="nav-item nav-link active">Home</a>
                        <a href="/home/about" class="nav-item nav-link">About</a>
                        <a href="/home/waching" class="nav-item nav-link">Washing Plans</a>
                        <a href="/home/washorder" class="nav-item nav-link">Washing Order</a>
                        <a href="/home/washhistory" class="nav-item nav-link">Washing History</a>



                        <a href="/home/contact" class="nav-item nav-link">Contact</a>
                        <!-- <a href="" class="nav-item nav-link">Admin</a> -->
                    </div>



                    <div class="ml-auto">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::check())
                                    {{ Auth::user()->name }}
                                @else
                                    Join Now
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                @if (Auth::check())
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    <a class="dropdown-item" href="{{ route('change.password') }}">Change Password</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                @endif
                            </div>
                        </div>
                        
</div>


                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
</header>