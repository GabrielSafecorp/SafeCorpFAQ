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
                        <li><a href="{{route('faq.home')}}">Home</a></li>
                        <li><a href="{{route('module.show', ['module' => $module->id])}}">{{$module->title}}</a></li>
                        <li><span>How to setup payment gateways</span></li>
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
                            <h1 class="uk-article-title uk-margin-bottom">How to setup payment gateways</h1>
                            <div class="author-box uk-card">
                                <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle  uk-position-relative" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="70" height="70" src="../user/profile/gabriel.jpg">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h5 class="uk-card-title">{{$user->name}}</h5>
                                            <p class="uk-article-meta uk-margin-remove-top">Criado em : {{$article->created_at}}
                                           <br>  Ultima atualização : {{$article->created_at}}</p>
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
                                <h3>Ultimos Artigos</h3>
                                <ul class="uk-list-large">
                                    @section('ArtigosRelacionados')
                                        
                                    @show
                                </ul>
                            </div>
                        </div>
                        
                        </div>
                    </article>
                </div>        
            </div>
        </div>
    </div>

   
@endsection