@extends('layouts/basecategory')
@section('ModulosMenus')
    @foreach ($modules as $moduleMenu)

    @if ($moduleMenu->id == $module->id)
    <li><a class="uk-text-bold" href="#" style="color: #425869;">{{$moduleMenu->title}}</a></li>
    @else        
    <li><a href="{{route('module.show', ['module' => $moduleMenu])}}">{{$moduleMenu->title}}</a></li>
    @endif

    @endforeach
@endsection
@section('ModulosMenusLeft')
    @foreach ($modules as $moduleMenu)

    @if ($moduleMenu->id == $module->id)
    <li><a class="uk-text-bold" href="#">{{$moduleMenu->title}}</a> <span uk-icon="icon: chevron-right"></span></li>
    @else        
    <li><a href="{{route('module.show', ['module' => $moduleMenu])}}">{{$moduleMenu->title}}</a></li>
    @endif

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
<h3><a href="../article/{{$articleLink->id}}">{{$articleLink->title}}</span></a></h3>
</li>

@endif

    
@endforeach      
@endsection


