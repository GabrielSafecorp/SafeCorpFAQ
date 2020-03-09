@extends('basemodulo')
@section('ModulosMenus')
    @foreach ($modules as $module)
    <ul class="uk-nav-sub">
        <a href="{{route('module.show', ['module' => $module])}}">{{$module->title}}</a>
    </ul>
    @endforeach
@endsection

@section('ArticlesSubMenu')
    @foreach ($articles as $modulessub)
    <li>
    <a href="#{{$modulessub->id}}" uk-scroll="offset: 50">{{$modulessub->title}}</a>
    </li>
    @endforeach
@endsection

@section('Articles')

<h2 id="{{$module->id}}">{{$module->title}}</h2>
<ul class="list-faq" uk-accordion="multiple: true">
    @foreach ($articles as $desc)

    <li>
        <h3 class="uk-accordion-title">{{$desc->title}}</h3>
        <div class="uk-accordion-content">
            <a href="#"><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p></a>
        </div>
    </li>
    
    @endforeach
</ul>
       
@endsection
