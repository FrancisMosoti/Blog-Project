<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form method="post" action="/register" style="border:1px solid #444; width: 600px; margin: 100px auto 20px auto; padding: 20px">
@csrf
  <div class="">

  <!-- ----------------------- -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- ------------------- -->
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" id="name" placeholder="Enter name" name="name">
    <br>
    <br>

    <label for="phone"><b>Phone</b></label>
    <input type="text" id="phone" placeholder="Enter phone" name="phone">
        <br>
        <br>

    <label for="email"><b>Email</b></label>
    <input type="text" id="email" placeholder="Enter Email" name="email">
        <br>
        <br>

    <label for="password"><b> Enter Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="password">
        <br>
        <br>

    <label for="confirm_password"><b>Confirm Password</b></label>
    <input type="password" id="confirm_password" placeholder="Confirm Password" name="password">
        <br>
        <br>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
      <button type="reset" class="cancelbtn">Cancel</button>
    </div>

  </div>
</form>
</body>
</html>