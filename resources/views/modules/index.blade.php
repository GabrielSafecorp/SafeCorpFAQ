@extends('')
@section('Categories')
    @foreach ($modules as $module)
    <li class="uk-nav-sub">
        <a href="{{route('module.show', ['module' => $module])}}">{{$module->title}}</a>
    </li>
    @endforeach
@endsection

@section('ModulesSubMenu')
    @foreach ($modules as $modulessub)
    <li>
    <a href="#{{$modulessub->id}}" uk-scroll="offset: 50">{{$modulessub->title}}</a>
    </li>
    @endforeach
@endsection

@section('Articles')
@foreach ($modules as $completo)
<h2 id="{{$completo->id}}">{{$completo->title}}</h2>
<ul class="list-faq" uk-accordion="multiple: true">
    @foreach ($articles as $desc)
    @if ($desc->modules_id == $completo->id)
    <li>
        <h3 class="uk-accordion-title">{{$desc->title}}</h3>
        <div class="uk-accordion-content">
            <a href="{{route('article.show', ['article' => $desc])}}"><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p></a>
        </div>
    </li>
    @endif
    @endforeach
</ul>
    @endforeach    
@endsection
