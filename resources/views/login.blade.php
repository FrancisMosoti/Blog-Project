<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>{{ config('app.name') }} - login</title>

</head>
<body>
  <div class="mask d-flex align-items-center gradient-custom-3">
    <div class="container ">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card my-3" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-4">Login</h2>
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif

              <form method="post" action="{{route('auth')}}">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="email" value="{{ old('email')?old('email'):'' }}" id="email" class="form-control form-control-md @error('email') is-invalid @enderror" />
                  <label class="form-label" for="email">Your Email</label>
                  @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-md @error('password') is-invalid @enderror" />
                  <label class="form-label" for="password">Enter Password</label>
                  @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                </div>

                <!-- <div class="form-check d-flex justify-content-center mb-3">
                  <input class="form-check-input me-2" type="checkbox" value="" id="check" />
                  <label class="form-check-label" for="check">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">LOGIN</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">Don't have an account? <a href="{{route('register')}}"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="">
    <P class="m-auto bg-success">COPYRIGHT &copy; <?php echo date("Y"); ?></P>
  </footer>
</body>
</html>