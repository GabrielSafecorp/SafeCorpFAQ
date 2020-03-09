@extends('basecategory')
@section('ModulosMenus')
    @foreach ($modules as $moduleMenu)
<li>
    @if ($moduleMenu->id == $module->id)
    <a class="uk-text-bold" href="#">{{$moduleMenu->title}}</a> <span uk-icon="icon: chevron-right"></span>
    @else        
    <a href="{{route('module.show', ['module' => $moduleMenu])}}">{{$moduleMenu->title}}</a>
    @endif
</li>
    @endforeach
@endsection

@section('ArticlesSubMenu')
    @foreach ($articlesMenu as $articlessub)
    <li>
    <a href="../article/{{$articlessub->id}}">{{$articlessub->title}}</a>
    </li>
    @endforeach
@endsection

@section('ArtigosShow')

@foreach ($articles as $articleLink)
@if ($articleLink->modules_id == $module->id)
<li>
    <h3><a href="article.html">{{$articleLink->title}}</span></a></h3>
</li>

@endif

    
@endforeach      
@endsection


