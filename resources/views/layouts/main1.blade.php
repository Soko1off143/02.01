@extends('layouts.bottomtop')
@section('title')
    <title>Страница 2</title>
@endsection
@section('aside')
@parent
    <aside>Дополнение</aside>
    {{$aside}}
@endsection
@section('main')
    <main>
        <h1>Контент 2</h1>
    </main>
@endsection