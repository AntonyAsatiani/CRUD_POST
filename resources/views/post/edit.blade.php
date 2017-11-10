<!DOCTYPE html>
<html>
<head>
	<title>edit post</title>
</head>
<body>
{{Form::open(array('action'=>['PostController@update',$post->id], 'method'=>'POST'))}}

{{csrf_field()}}
<input type="hidden" name="_method" value="PUT">
<h1>edit post</h1>
<input type="text" name="title" placeholder="title" value="title">
<br>
<textarea type="text" name="content" placeholder="content" value="content"></textarea>
<br>
<input type="file" name="image" value="upload">
<br>
<input type="submit" name="post" placeholder="post" value="post">



{{Form::close()}}


</body>
</html>