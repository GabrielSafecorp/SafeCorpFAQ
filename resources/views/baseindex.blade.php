@extends('top')
@section('hero')
<div class="section-hero uk-background-blend-color-burn uk-background-top-center uk-background-cover uk-section-large1 cta" style="background-image: url(assets/img/city.jpg)" >
    <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-light">
@endsection


@section('corpo')
    
<div class="uk-container hero">
    <h1 class="uk-heading-primary uk-text-center uk-margin-large-top uk-light">Create a Knowledge Base with Ease</h1>
    <p class="uk-text-lead uk-text-center uk-light">Lead volutpat nibh ligula gravida. Magna auctor eget venenatis phasellus luctus sodales pulvinar</p>
    <div class="uk-flex uk-flex-center uk-inliner">
        <form class="uk-margin-medium-top uk-margin-xlarge-bottom uk-search uk-search-default">
            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
            <input id="autocomplete" class="uk-search-input uk-form-large" type="search" autocomplete="off" name="s" placeholder="Enter search term here">
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
                <h3>Popular Articles</h3>
                <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                    @section('articlespop')
                    
                    @show
                </ul>
            </div>
            <div>
                <h3>Recent Articles</h3>
                <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                    @section('articlesnew')               
                    @show
                </ul>
            </div>
        </div>
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
                    <p class="uk-text-small">Faq SafeCorp ERP</p>
                </div>
            </div>
        </div>
    </footer>
    
    <div id="offcanvas" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <a class="uk-margin-small-bottom uk-logo uk-text-uppercase" href="index.html"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> Knowledge</a>
            <ul class="uk-nav uk-nav-default uk-text-uppercase">
                @if (Route::has('login'))
                
                @auth
                <li> <a href="{{ url('/home') }}">Home</a> </li>
                @else
                <li>   <a href="{{ route('login') }}">Logar</a> </li>
                
                @if (Route::has('register'))
                <li>      <a href="{{ route('register') }}">Registrar</a> </li>
                @endif
                @endauth
                
                @endif
                <li><a href="faq.html">Artigos</a></li>
                <li class="uk-parent">
                    <a href="article.html">Modulos</a>
                    
                    @yield('ModulosMenus')
                    
                </li>
                
            </ul>
            
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>

</html>
@endsection