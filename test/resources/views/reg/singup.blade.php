<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>
<h1>User sign-Up</h1>

<form method="post">
    @csrf
    <fieldset>
        <legend>Registration</legend>
        <table>
            <tr>
                <td>Full name</td>
                <td><input type="text" value="{{old('username')}}" name="fullname"></td>
                <td> @if ($errors->has('username'))
                        {{ $errors->first('username') }}
                    @endif</td>
            </tr>
            <tr>
                <td>user Name</td>
                <td><input type="password" value="{{old('password')}}" name="username"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="password" value="{{old('password')}}" name="email"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>


            <tr>
                <td>Password</td>
                <td><input type="password" value="{{old('password')}}" name="password"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>

            <tr>
                <td>Confirm  Password</td>
                <td><input type="password" value="{{old('')}}" name="password"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" value="{{old('password')}}" name="address"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>

            <tr>
                <td>User-type</td>
                <td><input type="select" value="{{old('password')}}" name="user-type"></td>
                <td> @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif </td>
            </tr>



            <tr>
                <td><input type="submit" name="submit" value="sign up"></td>

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
