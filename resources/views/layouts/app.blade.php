<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark static-top bg-dark" >
            <div class="container" style="height:50px;" >
                <a class="navbar-brand" href="{{ url('/') }}" >
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role == 'user')
                                        <a class="dropdown-item" href="/tickets">
                                            {{ __('Tickets') }}
                                        </a>
                                    @endif
                                    @if (Auth::user()->role == 'admin')
                                        <a class="dropdown-item" href="/admin">
                                            {{ __('Dashboard') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color:#263238; ">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
    
          <!-- Grid row -->
          <div class="row" style ="text-align:center;">
    
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
    
              <!-- Content -->
              <h3 class="text-uppercase" style ="color:white; text-align:center; padding-bottom:10px">Contact Us</h3>
              <ul class="list-unstyled" >   
                    <li>
                        <img src="/images/twitter1.png" style="width:80px; height:auto; padding:0px;"> 
                        <img src="/images/facebook1.png" style="width:60px; height:auto; padding:5px; margin-right:5px">
                        <img src="/images/youtube1.png" style="width:80px; height:auto; padding:10px; margin-right:5px">
                        <img src="/images/instagram1.png" style="width:60px; height:auto; padding:5px; margin-right:5px">
                        <img src="/images/pinterest1.png" style="width:60px; height:auto; padding:5px;">
                    </li>   
                </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none pb-3">
    
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
    
                <!-- Links -->
                <h5 class="text-uppercase" style ="color:white;">Our Company</h5>
    
                <ul class="list-unstyled" style ="color:white;">
                  <li>
                    Our Cinemas
                  </li>
                  <li>
                    Contact Us
                  </li>
                  <li>
                    FAQs
                  </li>
                  <li>
                    Careers
                  </li>
                  <li>
                    Privacy Policy
                </li>
                </ul>
    
              </div>
    
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
    
                <!-- Links -->
                <h5 class="text-uppercase" style ="color:white">Movies</h5>
    
                <ul class="list-unstyled" style ="color:white;">
                  <li>
                    Movies
                  </li>
                  <li>
                   Theaters
                  </li>
                  <li>
                    Ratings Information
                  </li>
                  <li>
                    IMAX
                  </li>
                  <li>
                    Dolby Cinema
                    </li>
                </ul>
    
              </div>
              <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
</body>
</html>
