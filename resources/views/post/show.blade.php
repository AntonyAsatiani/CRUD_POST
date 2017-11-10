<!DOCTYPE html>
<html>
<head>
	<title>{{$post->title}}</title>
</head>
<body>

<h1>{{$post->title}}</h1>

<!-- show image from db -->
{{ Html::image('image/' .$post->image) }}


<p>{{$post->content}} </p>

<a href="{{URL::to('/post/'. $post->id . '/edit')}}">edit post</a>


{{Form::open(array('action'=>['PostController@destroy',$post->id],'method'=>'POST'))}}
<input type="hidden" name="_method" value="DELETE">

<input type='submit' name="delete" value="delete">

{{Form::close()}}
</body>
</html>