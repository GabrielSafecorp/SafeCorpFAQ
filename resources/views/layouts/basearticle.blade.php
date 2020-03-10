<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article - Knowledge Base HTML Template</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
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
                            <a href="">Modulos</a>
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
                    <li><a href="../modules/{{$article->modules_id}}">{{$module->title}}</a></li>
                        <li><span>{{$article->title}}</span></li>
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
        <div class="uk-container uk-position-relative">
            <div uk-grid>
                <div class="uk-width-3-4@m">
                    <article class="uk-article">
                        <header>
                            <h1 class="uk-article-title uk-margin-bottom">{{$article->title}}</h1>
                            <div class="author-box uk-card">
                                <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle  uk-position-relative" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="40" height="40" src="../assets/img/joshua.jpg">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h5 class="uk-card-title">{{$user->name}}</h5>
                                            <p class="uk-article-meta uk-margin-remove-top">Creado em : {{$article->created_at}} <br>
                                            Alterado em : {{$article->updated_at}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content uk-margin-medium-top">
                            <p class="uk-text-lead">{{$article->description}}</p>
                            @section('TopicosFull')
                                
                            @show
                        </div>
                        <hr>
                        <div class="uk-child-width-1-2@s text-dark article-related uk-margin-medium-top" uk-grid>
                            <div>
                                <h3>Artigos Relacionados</h3>
                                <ul class="uk-list uk-list-large">
                                    @section('ArtigosRelacionados')
                                        
                                    @show
                                </ul>
                            </div>
                            <div>
                                <h3>Você viu recentemente</h3> {{-- Não sei como fazer --}}
                                <ul class="uk-list uk-list-large">
                                    @section('ArtigosRecentementeVistos')
                                        
                                    @show
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="uk-width-1-4@m">
                    <div uk-sticky="offset: 100" class="scrollspy uk-sticky uk-active uk-card uk-card-small uk-card-body uk-padding-remove-top uk-visible@m">
                        <h3 class="uk-card-title">Tabela dos Topicos</h3>
                        <ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true; offset: 30">
                            @section('TopicosMenu')
                                
                            @show
                        </ul>
                    </div>
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