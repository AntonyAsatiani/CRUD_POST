<!DOCTYPE html>
<html>
<head>
	<title>create post</title>
</head>
<body>

{{Form::open(array('action'=>'PostController@store', 'method'=>'POST','files'=>true))}}
{{csrf_field()}}
<input type="hidden" name="_method" value="POST">

<input type="text" name="title" placeholder="title" value="title">
<br>
<textarea type="text" name="content" placeholder="content" value="content"></textarea>
<br>
{{Form::open(array())}}
{!! Form::file('file',null)!!}
<br>
<input type="submit" name="post" placeholder="post" value="post">


{{Form::close()}}




</body>
</html>