<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="post" action="/login" style="border:1px solid #444; width: 600px; margin: 150px auto 0 auto; padding: 20px">
@csrf
  <div class="">
    <h1>login</h1>
    <hr>
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