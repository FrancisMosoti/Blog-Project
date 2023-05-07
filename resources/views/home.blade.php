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
    <div class="container">
        <nav class="navbar navbar-dark bg-dark" id="top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome, </h5> -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post')}}">New Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Register</a></li> -->
                        <!-- <li class="dropdown-item">Name : <span class="text-primary"></span></li>
                        <li class="dropdown-item">Phone : <span class="text-primary"></span></li>
                        <li class="dropdown-item">Email : <span class="text-primary"></span></li> -->
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
   





            <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div> -->
            <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="p-4 p-md-5 mb-4 mt-4 rounded text-bg-dark">
                <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">My Blog</h1>
                <p class="lead my-3">This is my first blog project using laravel framework. Learns never stops</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++ -->
            @foreach($posts as $post)
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="300" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Category</strong>
                    <h3 class="mb-0">{{$post->title}}</h3>
                    <div class="mb-1 text-body-secondary">{{$post->created_at->diffForHumans()}}</div>
                    <p class="card-text mb-auto">{{$post->body}}</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <footer class="d-flex text-center flex-column bg-secondary p-5 mb-2">
        <p>Blog built by  <a href="https://francismosoti.netlify.app/" target="_blank">Francis Mosoti</a></p>
        <p>
            <a href="#top">Back to top</a>
        </p>
        </footer>

    </div>

</body>
</html>