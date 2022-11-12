@extends('products.layouts.app')

@section('title')Категории@endsection

@section('content')
    @foreach ($arr as $subArr)
        <a href='/public/product/{{$loop->iteration}}'>{{$subArr['name']}}</a>
        <p>Количество продуктов: {{count($subArr['products'])}}</p>
    @endforeach
@endsection