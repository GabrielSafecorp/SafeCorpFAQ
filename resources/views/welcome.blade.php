
@extends('layouts/baseindex')
@section('ModulosMenus')
    @foreach ($modules as $module)
        <li><a href="{{route('module.show', ['module' => $module])}}">{{$module->title}}</a></li>
    @endforeach
@endsection

@section('Modulos')
    @foreach ($modules as $module)
    <div>
    <a href="{{route('module.show', ['module' => $module])}}" class="box uk-border-rounded">
            <h3>{{$module->title}}</h3>
        </a>
    </div>
    @endforeach
@endsection

@section('articlespop')
    @foreach ($populares as $popular)
<li><a href="{{route('article.show', ['article' => $popular])}}">{{$popular->title}}</a></li>
    @endforeach
@endsection

@section('articlesnew')
@foreach ($novos as $novo)
<li><a href="{{route('article.show', ['article' => $novo])}}">{{$novo->title}}</a></li>
    @endforeach
@endsection


