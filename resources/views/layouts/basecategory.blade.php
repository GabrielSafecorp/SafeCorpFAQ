<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Management -Knowledge Base HTML Template</title>
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/main.js"></script>
</head>

<body>
    <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-background-primary uk-light uk-margin-remove-bottom">
        
            <div class="uk-container">
                <div uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-text-uppercase" href="/"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> SafeCorp FAQ</a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-text-uppercase uk-visible@m uk-margin-medium-left">
                            
                            <li>
                                <a href="/modules">Modulos</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        @section('ModulosMenus')
                                            
                                        @show
                                    </ul>
                                </div>
                            </li> 
                            <li><a href="/">Home</a></li>


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
                            <li>
                                <a href="/modules">{{ Auth::user()->name }}<span class="caret"></a>
                                
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </li> 
                            
                        @endguest
                        </ul>
                        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" uk-navbar-toggle-icon uk-toggle></a>
                    </div>
                </div>
            </div>
        </nav>
   

    <div class="uk-section section-sub-nav uk-padding-remove">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <ul class="uk-breadcrumb uk-visible@m">
                        <li><a href="/">Home</a></li>
                        <li><span href="">{{$module->title}}</span></li>
                    </ul>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-margin">
                        <form class="uk-search uk-search-default">
                            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                            <input id="autocomplete" class="uk-search-input" type="search" autocomplete="off" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="border-top"></div>
        </div>
    </div>

    <div class="uk-section uk-section-small uk-padding-remove-bottom section-content">
        <div class="uk-container">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-3-4@m uk-flex-last@m">
                    <h1>Account Management</h1>
                    <p class="uk-text-lead uk-margin-medium-bottom">Managing your account, creating new users, security and exporting data</p>
                    <ul class="uk-list list-category link-icon-right">
                        @section('ArtigosShow')
                            
                        @show
                    </ul>
                    <ul class="uk-pagination uk-margin-medium-top" uk-margin>
                       
                    <li><a  @if ($module->id > (1)) href="../modules/{{$module->id - (1)}}" @endif><span class="uk-margin-small-right" uk-pagination-previous></span> Anterior</a></li>
                    <li class="uk-margin-auto-left"><a @if ($module->id < $count)href="../modules/{{$module->id + (1)}}" @endif>Proximo <span class="uk-margin-small-left" uk-pagination-next></span></a></li>
                    </ul>
                </div>
                <div class="uk-width-1-4@m text-dark sidebar">
                    <h3>Modulos do FAQ</h3>
                    <ul class="uk-list uk-list-large uk-margin-medium-bottom">
                        @section('ModulosMenusLeft')
                            
                        @show
                    </ul>
                    <h3> Artigos Relacionados</h3>
                    <ul class="uk-list uk-list-large">
                       @section('ArticlesSubMenu')
                           
                       @show
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
            <a class="uk-margin-small-bottom uk-logo uk-text-uppercase" href="/"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> SafeCorp FAQ</a>
            <ul class="uk-nav uk-nav-default uk-text-uppercase">
                <li><a href="/">Home</a></li>
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
                <li>
                    <a href="/modules">{{ Auth::user()->name }}<span class="caret"></a>
                        
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </li> 
                    
                    @endguest
                <li class="uk-parent">
                    <a href="/modules">Modulos</a>
                    <ul class="uk-nav-sub">
                        @section('ModulosMenus')
                        @show
                    </ul>
                </li>
                
                </ul>
                <a href="contact.html" class="uk-button uk-button-small uk-button-default uk-width-1-1 uk-margin">Support</a>
                <div class="uk-width-auto uk-text-center">
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: facebook"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: google"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter"></a>
                </div>            
            </div>
        </div>
        
    </body>
    
    </html>