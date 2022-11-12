@extends('post.layouts.app')

@section('title')Список страниц@endsection

@section('content')
<header>
	<h1>Список страниц</h1>
</header>
<main>
	@foreach ($postId as $subPostId)
		<div class="post">
			<h2>{{$postId[1]['title']}}</h2>
			<div class="info">
				<span class="date">{{$subPostId['date']}}</span>
				<span class="author">{{$subPostId['author']}}</span>
			</div>
			<div class="text">
				{{$subPostId['teaser']}}
			</div>
			<div class="more">
				<a href="posts/{{$loop->iteration}}">Подробнее...</a>
			</div>
		</div>
	@endforeach
</main>
@endsection
