<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ SafeCorp</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="../assets/js/main.js"></script>
</head>
<body>
    @yield('hero')        
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-text-uppercase" href="{{route('faq.home')}}"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> SafeCorp FAQ</a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-text-uppercase uk-visible@m uk-margin-medium-left">
                            <li>
                                <a href="..\modules">Modulos</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        @section('ModulosMenus')
                                        
                                        @show
                                        
                                    </ul>
                                </div>
                            </li>      
                            
                            <li>
                                <a href="article.html">Artigos</a>
                               
                            </li>      
  
                            @if (Route::has('login'))
                            
                            @auth
                            <li> 
                            <a href="{{ url('/home') }}"> {{ Auth::user()->name }}
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         <p class="text-dark mx-0">{{ __('Logout') }}</p>
                                     </a>                              
                                    </ul>
                                </div>
                            </li>   
                            @else
                            <li>   <a href="{{ route('login') }}">Login</a> </li>
        
                                @if (Route::has('register'))
                                <li>      <a href="{{ route('register') }}">Register</a> </li>
                                @endif
                            @endauth
                        
                    @endif
                        </ul>
                        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" uk-navbar-toggle-icon uk-toggle></a>
                    </div>
                </div>
            </div>
        </nav>
@yield('corpo')