@extends('products.layouts.app')

@section('title')Категория@endsection

@section('content')
    <h1>{{$arr['name']}}</h1>
        @foreach ($arr['products'] as $subArr)
            <a href='{{$idCategory}}/{{$loop->iteration}}'>{{$subArr['name']}}</a>
            <p>Цена: {{$subArr['cost']}}</p><hr>
        @endforeach
    <a href='/public/categories'>Вернуться в Категории</a>
@endsection