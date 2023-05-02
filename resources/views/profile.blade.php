<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <h1>My Profile</h1>
    <a href="{{route('logout')}}">LOGOUT</a>
    <hr>
    <p>Name => {{$data->name}}</p>
    <p>Email => {{$data->email}}</p>
    <p>Phone Number => {{$data->phone}}</p>
</body>
</html>