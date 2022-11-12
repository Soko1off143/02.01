@extends('post.layouts.app')

@section('title')Страницы с id: {{$id}} не существует!@endsection

@section('content')
<header>
    <h1>Извините, страница с id: {{$id}} не найдена!</h1>
</header>
<main>
    <div class='text'>Извините, страницы с id: {{$id}} не существует!</div>
</main>
@endsection