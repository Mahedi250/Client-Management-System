<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="post">
        @csrf
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" value="{{old('username')}}" name="username"></td>
                    <td> @if ($errors->has('username'))
                            {{ $errors->first('username') }}
                        @endif</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" value="{{old('password')}}" name="password"></td>
                    <td> @if ($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif </td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
					<td><a href="/signup"  > Registraion </a> </td>
				</tr>
			</table>
		</fieldset>
	</form>

    {{session('msg')}}

    @foreach($errors->all() as $err)
        {{$err}} <br>
    @endforeach

</body>
</html>
