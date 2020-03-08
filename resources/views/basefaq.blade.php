@extends('top')
@section('hero')
<nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-background-primary uk-light uk-margin-remove-bottom">
@endsection
@section('corpo')
    <div class="uk-section section-sub-nav uk-padding-remove">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <ul class="uk-breadcrumb uk-visible@m">
                        <li><a href="index.html">Home</a></li>
                        <li><span href="">Frequently Asked Questions</span></li>
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
                <div class="uk-width-1-4@m uk-visible@m text-dark sidebar">
                    <div uk-sticky="offset: 50">
                        <h3>Lista de Modulos</h3>
                        <ul class="uk-list uk-list-large">
                            @section('ModulesSubMenu')
                            @show
                        </ul>
                    </div>
                </div>
                <div class="uk-width-3-4@m">
                    <h1>Frequently Asked Questions</h1>
                    <p class="uk-text-lead uk-margin-large-bottom">Here are answers to most common questions. Can't find an answer? Call us!</p>

                    @section('Articles')
                    @show

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
            <a class="uk-margin-small-bottom uk-logo uk-text-uppercase" href="index.html"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> Knowledge</a>
            <ul class="uk-nav uk-nav-default uk-text-uppercase">
                <li><a href="index.html">Home</a></li>
                <li class="uk-parent">
                    <a href="article.html">Article</a>
                    <ul class="uk-nav-sub">
                        <li><a href="article.html">Scrollspy</a></li>
                        <li><a href="article-narrow.html">Narrow</a></li>
                    </ul>
                </li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="components.html">Components</a></li>
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
@endsection