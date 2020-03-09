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
<footer id="footer" class="uk-section uk-margin-large-top uk-section-xsmall uk-text-small uk-text-muted border-top">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-text-center" uk-grid>
            <div class="uk-text-right@m">
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: facebook"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: google"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: vimeo"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: instagram"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: youtube"></a>
            </div>
            <div class="uk-flex-first@m uk-text-left@m">
                <p class="uk-text-small">Copyright 2017 Powered by Code Love</p>
            </div>
        </div>
    </div>
</footer>

<div id="offcanvas" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <li><a class="uk-navbar-item uk-logo uk-text-uppercase" href="{{route('faq.home')}}"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> SafeCorp FAQ</a></li>
        <ul class="uk-nav uk-nav-default uk-text-uppercase">
            @if (Route::has('login'))                            
            @auth
            <li> 
                <a href="{{ url('/') }}"> {{ Auth::user()->name }} </a>                                    <ul class="uk-nav-sub">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                    
                </a>                              
            </ul>
            
        </li>   
        @else
        <li>   <a href="{{ route('login') }}">Login</a> </li>
        
        @if (Route::has('register'))
        <li>      <a href="{{ route('register') }}">Register</a> </li>
        @endif
        @endauth
        
        @endif
        <li class="uk-parent">
            <a href="article.html">Modulos</a>
            <ul class="uk-nav-sub">
                @section('ModulosMenus')
                @show
            </ul>
        </li>
        
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</body>

</html>