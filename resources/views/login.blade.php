<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<form action="/postLogin" method="post">
		
	<input type="text" name="username" value="" />
	<input type="password" name="password" value="" />
	{!! csrf_field() !!}
	<input type="submit" name="Login" value="Login" />
</form>

</body>
</html>