<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SafeCorp FAQ Base HTML Template</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/main.js"></script>
    
</head>

<body>
    <div class="section-hero uk-background-blend-color-burn uk-background-top-center uk-background-cover uk-section-large1 cta" style="background-image: url(assets/img/city.jpg)" >
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-light">
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
            <div class="uk-container hero">
                <h1 class="uk-heading-primary uk-text-center uk-margin-large-top uk-light">FAQ SafeCorp</h1>
                <p class="uk-text-lead uk-text-center uk-light">Aqui temos o FAQ para o Sistema ERP da SafeCorp</p>
                <div class="uk-flex uk-flex-center uk-inliner">
                    <form class="uk-margin-medium-top uk-margin-xlarge-bottom uk-search uk-search-default">
                        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                        <input id="autocomplete" class="uk-search-input uk-form-large" type="search" autocomplete="off" name="s" placeholder="Entre com sua Busca">
                    </form>
                </div>
            </div>
        </div>
        
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-3@s uk-grid-match uk-grid-medium uk-text-center" uk-grid>
                    @section('Modulos')
                    
                    @show
                </div>
            </div>
        </div>
        
        <div class="uk-section uk-padding-remove-top uk-padding-remove-bottom">
            <div class="uk-container">
                <hr>
            </div>
        </div>
        
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2@s text-dark" uk-grid>
                    <div>
                        <h3>Artigos Populares</h3>
                        <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                            @section('articlespop')
                            
                            @show
                        </ul>
                    </div>
                    <div>
                        <h3>Artigos Recentes</h3>
                        <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                            @section('articlesnew')
                            
                            @show
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-padding-remove section-cta uk-background-blend-lighten uk-background-center-center uk-background-cover uk-text-center" style="background-image: url(assets/img/cafe.jpg)" >
            <div class="uk-background-muted1 uk-border-rounded1 uk-padding-large">
                <h2>Não achou o que estava Procurando?</h2>
                <p class="uk-text-lead">Entre em contato conosco !</p>
                <p class="uk-margin-medium-top">
                    <a href="contact.html" class="uk-button uk-button-primary uk-button-large">Contato com Suporte</a>
                </p>
            </div>
        </div>
        <footer id="footer" class="uk-section uk-margin-remove uk-section-xsmall uk-text-small uk-text-muted border-top">
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
                        <p class="uk-text-small">Copyright -- Inserir Depois</p>
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