<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>
<body>
  <form method="post" action="/register" style="border:1px solid #444; width: 600px; margin: 100px auto 0 auto; padding: 20px">
@csrf
  <div class="">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name">
    <br>
    <br>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter phone" name="phone">
        <br>
        <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">
        <br>
        <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
        <br>
        <br>

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Submit</button>
    </div>

  </div>
</form>
</body>
</html>