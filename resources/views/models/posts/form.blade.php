@extends('layouts.app')

@section('content')

<?php
	$post = $post ?? null;
?>

<h1>@if($post) Edit Post @else New Post @endif</h1>

<form enctype="multipart/form-data" action="{{ $post ? route('posts.update', $post) : route('posts.store')}}" method="post">
	@csrf
	@if($post)
		@method('put')
	@endif
	<div>
		<label for="title">Title</label>
	</div>
	<div>
		<input value="{{old('title', $post->title ?? null)}}" type="text" name="title" id="title" required autofocus/>
	</div>
	<div>
		<label for="description">Description</label>
	</div>
	<div>
		<textarea name="description" id="description" required>{{old('description', $post->description ?? null)}}</textarea>
	</div>
	<div>
		<label for="image">Image</label>
		<input type="file" name="image" id="image" accept="image/*">
	</div>
	<button>@if($post) Edit Post @else Create Post @endif</button>
</form>
@endsection