<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{$post->title}}</title>

</head>
<body>
	
	<h1 style="text-align:center; background-color: lightgreen; font-size:50px;">{{$post->title}}</h1>
	<p style="text-align: center; font-size: 25px">{{$post->description}}</p>

	<img style="margin-left: 35%" src="{{url(str_replace('public', 'storage', $post->image_path))}}" alt="" height="400" width="600">

		<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

	<script type="text/javascript">
	  VK.init({apiId: 7909725, onlyWidgets: true});
	</script>

	<!-- Put this div tag to the place, where the Comments block will be -->
	<div id="vk_comments"></div>
	<script type="text/javascript">
	VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
	</script>

	@if(auth()->check())
	<div>
		<a style="text-decoration: none; font-size: 25px; color: blue;" href="{{route('posts.edit', $post)}}">Edit Post</a>
		<form action="{{route('posts.delete', $post)}}" method="post">
			@csrf @method('delete')
			<button>Delete Post</button>
		</form>
	</div>
	@endif
	<a href="{{route('posts.index')}}">Назад</a>
</body>
</html>

