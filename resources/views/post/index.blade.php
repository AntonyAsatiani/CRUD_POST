<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<div style="text-align:center;">
<a href="{{URL::to('post/create')}}">create post</a>

</div>

<ul>
@foreach($post as $item)



<li><a href="{{route('post.show', $item->id)}}">{{$item->title}}</li>

@endforeach
</ul>
</body>
</html>

