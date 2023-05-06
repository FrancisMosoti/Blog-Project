<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>{{config('app.name')}} - Home</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome, {{$data->name}}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Post</button>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Register</a></li> -->
                        <li class="dropdown-item">Name : <span class="text-primary">{{$data->name}}</span></li>
                        <li class="dropdown-item">Phone : <span class="text-primary">{{$data->phone}}</span></li>
                        <li class="dropdown-item">Email : <span class="text-primary">{{$data->email}}</span></li>
                        <!-- <li><a class="dropdown-item" href="#">Register</a></li> -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">LOGOUT</a></li>
                        </ul>
                    </li>
                    </ul>
                    <!-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                    </form> -->
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card p-2">
                        <h5 class="card-header">
                        Create a post
                        </h5>
                        <form action="{{route('posts')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title">
                                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body Content</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" id="body" rows="3"></textarea>
                                @error('body')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->





            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create a post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('posts')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title')?old('title'):'' }}" id="title">
                            @error('title')<div class="text-danger">{{ $message }}</div>@enderror

                        </div>
                        <div class="mb-3">
                            <label for="body" class="col-form-label">Message:</label>
                            <textarea name="body" class="form-control @error('body') is-invalid @enderror"  value="{{ old('body')?old('body'):'' }}" rows="5" id="body"></textarea>
                            @error('body')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                </div>
            </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
            <h2 class="bg-primary">posts</h2>
        </div>

    </div>

</body>
</html>