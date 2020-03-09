@extends('basearticle')

@section('TopicosFull')
@foreach ($topics as $topicFull)

<h2 id="{{$topicFull->id}}">{{$topicFull->title}}</h2>
<p>{{$topicFull->description}}</p>

@endforeach
@endsection

@section('TopicosMenu')
@foreach ($topics as $topicFull)

<li><a href="#{{$topicFull->id}}">{{$topicFull->title}}</a></li>


@endforeach
@endsection

@section('ArtigosRelacionados')
@foreach ($articles as $topicFull)
<li><a href="#{{$topicFull->id}}">{{$topicFull->title}}</a></li>
@endforeach
@endsection
