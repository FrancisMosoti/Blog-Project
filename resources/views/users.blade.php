<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>{{ config('app.name') }} - Users</title>
</head>
<body>


<div class="container mt-5">
    <div>
        <!-- <a href="{{route('back')}}" class="btn btn-outline-primary mb-3">Home</a> -->
    </div>
    <table class="table table-bordered ">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>pass</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <th>{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


</body>
</html>