@extends('products.layouts.app')

@section('title')Товар@endsection

@section('content')
<p>Название продукта:{{$arr['name']}}</p>
<p>Стоимость: {{$arr['cost']}}</p>
@if ($arr['inStock'])
    <p>Есть в наличии</p>
@else
    <p>Нет в наличии</p>
@endif
    <p>Описание: {{$arr['desc']}}</p><hr>
    <a href='/public/product/{{$idCategory}}'>Вернуться в Категорию</a>
@endsection