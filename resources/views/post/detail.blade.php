@extends('post.layouts.app')

@section('title'){{$postId['title']}}@endsection

@section('content')
<header>
    <h1>{{$postId['title']}}</h1>
</header>
<main>
    <div class='info'>
        <span class='date'>{{$postId['date']}}</span>
        <span class='author'>{{$postId['author']}}</span>
    </div>
    <hr>
    <div class='text'>
        {{$postId['text']}}
    </div>
    <hr>
    <div class='more'>
        <a href='/public/posts'>Веруться назад</a>
    </div>
</main>
@endsection